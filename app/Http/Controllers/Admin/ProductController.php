<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Color;
use App\Models\Admin\OrderDetails;
use App\Models\Admin\Product;
use App\Models\Admin\ProductTag;
use App\Models\Admin\Size;
use App\Models\ItemTag;
use App\Models\ProductTagList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::query()->with('category', 'brand')->orderByDesc('id')->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    if ($data->type == PRODUCT_PHYSICAL) {
                        $btn = $btn . '<a href="' . route('admin.product.edit', ['product_type' => 'physical', 'id' => $data->id]) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    } elseif ($data->type == PRODUCT_DIGITAL) {
                        $btn = $btn . '<a href="' . route('admin.product.edit', ['product_type' => 'digital', 'id' => $data->id]) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    } elseif ($data->type == PRODUCT_LICENSE) {
                        $btn = $btn . '<a href="' . route('admin.product.edit', ['product_type' => 'license', 'id' => $data->id]) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.product.edit', ['product_type' => 'affiliate', 'id' => $data->id]) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    }

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.product.inactive', $data->id) . '" class="btn-action"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.product.active', $data->id) . '" class="btn-action"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.product.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('PrimaryImage', function ($data) {
                    $url = asset(ProductImage() . $data->Primary_Image);
                    return '<img src=' . $url . ' border="0" width="50" class="img-rounded" align="center" />';
                })
                ->editColumn('ProductName', function ($data) {
                    return $data->en_Product_Name;
                })
                ->editColumn('Category', function ($data) {
                    return $data->category->en_Category_Name;
                })
                ->editColumn('Brand', function ($data) {
                    return $data->brand->en_BrandName;
                })
                ->editColumn('Price', function ($data) {
                    $dp = $data->Discount_Price;
                    $p = $data->Price;
                    $btn = '<span class="badge admin-new-price text-success">' . $dp . '</span>';
                    $btn = $btn . '<span class="badge admin-old-price text-danger">' . $p . '</span>';
                    return $btn;
                })
                ->editColumn('Status', function ($data) {
                    if ($data->Status == 1) {
                        $active = "Active";
                        return '<span class="status active">' . $active . '</span>';
                    } else {
                        $active = "Inactive";
                        return '<span class="status blocked">' . $active . '</span>';
                    }
                })
                ->editColumn('type', function ($data) {
                    if ($data->type == PRODUCT_PHYSICAL) {
                        return __('Physical');
                    } elseif ($data->type == PRODUCT_DIGITAL) {
                        return __('Digital');
                    } elseif ($data->type == PRODUCT_LICENSE) {
                        return __('License');
                    } elseif ($data->type == PRODUCT_AFFILIATE) {
                        return __('Affiliate');
                    }
                })
                ->rawColumns(['action', 'PrimaryImage', 'Category', 'Price', 'Status'])
                ->addIndexColumn()
                ->make(true);
        }
        $data['title'] = __('Product List');
        return view('admin.pages.product.index', $data);
    }
    public function productCreate()
    {
        $data['title'] = __('Product Create');
        $data['product'] = Product::get();
        $data['category'] = Category::get();
        $data['tags'] = ProductTagList::get();
        $data['item_tags'] = ItemTag::get();
        return view('admin.pages.product.create', $data);
    }
    public function physicalProductCreate()
    {
        $data['title'] = __('Physical Product Create');
        $data['product'] = Product::get();
        $data['category'] = Category::get();
        $data['tags'] = ProductTagList::get();
        $data['item_tags'] = ItemTag::get();
        return view('admin.pages.product.physical', $data);
    }
    public function digitalProductCreate()
    {
        $data['title'] = __('Digital Product Create');
        $data['category'] = Category::get();
        $data['tags'] = ProductTagList::get();
        $data['item_tags'] = ItemTag::get();
        return view('admin.pages.product.digital', $data);
    }
    public function licenseProductCreate()
    {
        $data['title'] = __('License Product Create');
        $data['product'] = Product::get();
        $data['category'] = Category::get();
        $data['tags'] = ProductTagList::get();
        $data['item_tags'] = ItemTag::get();
        return view('admin.pages.product.license', $data);
    }
    public function affiliateProductCreate()
    {
        $data['title'] = __('Affiliate Product Create');
        $data['product'] = Product::get();
        $data['category'] = Category::get();
        $data['tags'] = ProductTagList::get();
        $data['item_tags'] = ItemTag::get();
        return view('admin.pages.product.affiliate', $data);
    }

    public function productStore(ProductRequest $request)
    {
        $data = $request->except([
            'primary_image',
            'image_two',
            'image_three',
            'image_four',
            'image_five',
            'status',
            'feature',
            'best_sale',
            'on_sale',
            'on_arrival',
            'digital_file',
            'digital_link',
            'license_name',
            'license_key',
            'affiliate_link',
        ]);
        if (!empty($request->primary_image)) {
            $data['primary_image'] = fileUpload($request['primary_image'], ProductImage());
        } else {
            // return redirect()->back()->with('error', __('Image is  required'));
        }
        if (!empty($request->image_two)) {
            $data['img_two'] = fileUpload($request['image_two'], ProductImage());
        } else {
            // return redirect()->back()->with('error', __('Image is  required'));
        }

        if (!empty($request->image_three)) {
            $data['img_three'] = fileUpload($request['image_three'], ProductImage());
        } else {
            // return redirect()->back()->with('error', __('Image is  required'));
        }
        if (!empty($request->image_four)) {
            $data['img_four'] = fileUpload($request['image_four'], ProductImage());
        } else {
            // return redirect()->back()->with('error', __('Image is  required'));
        }
        if (!empty($request->image_five)) {
            $data['img_five'] = fileUpload($request['image_five'], ProductImage());
        } else {
            // return redirect()->back()->with('error', __('Image is  required'));
        }

        $data['status'] = checkBoxValue($request->status);
        $data['feature'] = checkBoxValue($request->feature);
        $data['best_sale'] = checkBoxValue($request->best_sale);
        $data['on_sale'] = checkBoxValue($request->on_sale);
        $data['on_arrival'] = checkBoxValue($request->on_arrival);

        if ($request->product_type == PRODUCT_PHYSICAL) {
            $create_product = $this->physicalProductAdd($data);
        } elseif ($request->product_type == PRODUCT_DIGITAL) {
            if ($request->digital_type == 'file') {
                if (!empty($request->digital_file)) {
                    $data['digital_file'] = fileUpload($request['digital_file'], PRODUCT_DIGITAL_PRODUCT);
                    $data['digital_link'] = null;
                } else {
                    return redirect()->back()->with('error', __('File is  required'));
                }
            } else {
                $data['digital_file'] = null;
                $data['digital_link'] = $request->digital_link;
            }
            $create_product = $this->digitalProductAdd($data);
        } elseif ($request->product_type == PRODUCT_LICENSE) {
            $data['license_name'] = $request->license_name;
            $data['license_key'] = $request->license_key;
            if ($request->digital_type == 'file') {
                if (!empty($request->digital_file)) {
                    $data['digital_file'] = fileUpload($request['digital_file'], PRODUCT_DIGITAL_PRODUCT);
                    $data['digital_link'] = null;
                } else {
                    return redirect()->back()->with('error', __('File is  required'));
                }
            } else {
                $data['digital_file'] = null;
                $data['digital_link'] = $request->digital_link;
            }
            $create_product = $this->licenseProductAdd($data);
        } elseif ($request->product_type == PRODUCT_AFFILIATE) {
            $data['affiliate_link'] = $request->affiliate_link;
            $create_product = $this->affiliateProductAdd($data);
        }

        if ($create_product['success'] == true) {
            return redirect()->route('admin.product')->with('success', __('Successfully Product Created!'));
        }
        return redirect()->route('admin.product')->with('error', __('Something went wrong!'));
    }

    public function physicalProductAdd($data)
    {
        $result  = ['success' => false];
        $product = Product::create([
            'en_Product_Name' => $data['en_product_name'],
            'en_Product_Slug' => $data['en_product_slug'],
            'Brand_Id' => $data['en_brand_name'],
            'Category_Id' => $data['en_category_name'],
            'Price' => $data['price'],
            'Discount' => $data['discount'],
            'Discount_Price' => $data['discount_price'],
            'en_About' => $data['en_about'],
            'en_Description' => $data['en_description'],
            'en_ShippingReturn' => $data['en_shippingreturn'],
            'en_AdditionalInformation' => $data['en_additionalinformation'],
            'fr_Product_Name' => $data['fr_product_name'],
            'fr_Product_Slug' => $data['fr_product_slug'],
            'fr_About' => $data['fr_about'],
            'fr_Description' => $data['fr_description'],
            'fr_ShippingReturn' => $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => $data['fr_additionalinformation'],
            'Quantity' => $data['qty'] ?? 0,
            'ItemTag' => $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'] ?? null,
            'Image3' => $data['img_three'] ?? null,
            'Image4' => $data['img_four'] ?? null,
            'Image5' => $data['img_five'] ?? null,

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
            'Voucher' => $this->generateRandomString(6),
        ]);
        if (!empty($product)) {
            if (isset($data['product_tag'])) {
                foreach ($data['product_tag'] as $rpt) {
                    ProductTag::create([
                        'tag' => $rpt,
                        'product_id' => $product->id,
                    ]);
                }
            }
            if (isset($data['color'])) {
                $colorsid = $data['color'];
                $product->colors()->sync($colorsid);
            }
            if (isset($data['size'])) {
                $sizeid = $data['size'];
                $product->sizes()->sync($sizeid);
            }

            $result['success'] = true;
        }
        return $result;
    }

    public function digitalProductAdd($data)
    {
        $result  = ['success' => false];
        $product = Product::create([
            'en_Product_Name' => $data['en_product_name'],
            'en_Product_Slug' => $data['en_product_slug'],
            'Brand_Id' => $data['en_brand_name'],
            'Category_Id' => $data['en_category_name'],
            'Price' => $data['price'],
            'Discount' => $data['discount'],
            'Discount_Price' => $data['discount_price'],
            'en_About' => $data['en_about'],
            'en_Description' => $data['en_description'],
            'en_ShippingReturn' => $data['en_shippingreturn'],
            'en_AdditionalInformation' => $data['en_additionalinformation'],
            'fr_Product_Name' => $data['fr_product_name'],
            'fr_Product_Slug' => $data['fr_product_slug'],
            'fr_About' => $data['fr_about'],
            'fr_Description' => $data['fr_description'],
            'fr_ShippingReturn' => $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => $data['fr_additionalinformation'],
            'Quantity' => $data['qty'],
            'ItemTag' => $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'] ?? null,
            'Image3' => $data['img_three'] ?? null,
            'Image4' => $data['img_four'] ?? null,
            'Image5' => $data['img_five'] ?? null,

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
            'Voucher' => $this->generateRandomString(6),
            'digital_type' => $data['digital_type'],
            'digital_file' => $data['digital_file'],
            'digital_link' => $data['digital_link'],
            'type' => PRODUCT_DIGITAL,
        ]);
        if (!empty($product)) {
            if (isset($data['product_tag'])) {
                foreach ($data['product_tag'] as $rpt) {
                    ProductTag::create([
                        'tag' => $rpt,
                        'product_id' => $product->id,
                    ]);
                }
            }
            $result['success'] = true;
        }
        return $result;
    }

    public function licenseProductAdd($data)
    {
        $result  = ['success' => false];
        $product = Product::create([
            'en_Product_Name' => $data['en_product_name'],
            'en_Product_Slug' => $data['en_product_slug'],
            'Brand_Id' => $data['en_brand_name'],
            'Category_Id' => $data['en_category_name'],
            'Price' => $data['price'],
            'Discount' => $data['discount'],
            'Discount_Price' => $data['discount_price'],
            'en_About' => $data['en_about'],
            'en_Description' => $data['en_description'],
            'en_ShippingReturn' => $data['en_shippingreturn'],
            'en_AdditionalInformation' => $data['en_additionalinformation'],
            'fr_Product_Name' => $data['fr_product_name'],
            'fr_Product_Slug' => $data['fr_product_slug'],
            'fr_About' => $data['fr_about'],
            'fr_Description' => $data['fr_description'],
            'fr_ShippingReturn' => $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => $data['fr_additionalinformation'],
            'Quantity' => $data['qty'],
            'ItemTag' => $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'],
            'Image3' => $data['img_three'],
            'Image4' => $data['img_four'],
            'Image5' => $data['img_five'],

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
            'Voucher' => $this->generateRandomString(6),
            'digital_type' => $data['digital_type'],
            'digital_file' => $data['digital_file'],
            'digital_link' => $data['digital_link'],
            'license_name' => $data['license_name'],
            'license_key' => $data['license_key'],
            'type' => PRODUCT_LICENSE,
        ]);
        if (!empty($product)) {
            foreach ($data['product_tag'] as $rpt) {
                ProductTag::create([
                    'tag' => $rpt,
                    'product_id' => $product->id,
                ]);
            }

            $result['success'] = true;
        }
        return $result;
    }

    public function affiliateProductAdd($data)
    {
        $result  = ['success' => false];
        $product = Product::create([
            'en_Product_Name' => $data['en_product_name'],
            'en_Product_Slug' => $data['en_product_slug'],
            'Brand_Id' => $data['en_brand_name'],
            'Category_Id' => $data['en_category_name'],
            'Price' => $data['price'],
            'Discount' => $data['discount'],
            'Discount_Price' => $data['discount_price'],
            'en_About' => $data['en_about'],
            'en_Description' => $data['en_description'],
            'en_ShippingReturn' => $data['en_shippingreturn'],
            'en_AdditionalInformation' => $data['en_additionalinformation'],
            'fr_Product_Name' => $data['fr_product_name'],
            'fr_Product_Slug' => $data['fr_product_slug'],
            'fr_About' => $data['fr_about'],
            'fr_Description' => $data['fr_description'],
            'fr_ShippingReturn' => $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => $data['fr_additionalinformation'],
            'Quantity' => $data['qty'],
            'ItemTag' => $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'],
            'Image3' => $data['img_three'],
            'Image4' => $data['img_four'],
            'Image5' => $data['img_five'],

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
            'Voucher' => $this->generateRandomString(6),
            'affiliate_link' => $data['affiliate_link'],
            'type' => PRODUCT_AFFILIATE,
        ]);
        if (!empty($product)) {
            foreach ($data['product_tag'] as $rpt) {
                ProductTag::create([
                    'tag' => $rpt,
                    'product_id' => $product->id,
                ]);
            }

            $result['success'] = true;
        }
        return $result;
    }

    public function productDelete($id)
    {
        $order_count = OrderDetails::where('Product_Id', $id)->count();
        if ($order_count != 0) {
            return redirect()->route('admin.product')->with('error', __('This product is already order by some one! First delete those.'));
        }
        $delete = Product::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.product')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.product')->with('error', __('Does Not Delete!'));
    }
    public function productActive($id)
    {
        $inactive = Product::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.product')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.product')->with('success', __('Does not Updated !'));
    }
    public function productInactive($id)
    {
        $inactive = Product::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.product')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.product')->with('success', __('Does not Updated !'));
    }

    public function productEdit($product_type, $id)
    {
        $data['title'] = __('Product Edit');
        $data['product'] = Product::with('brand', 'category', 'colors', 'sizes', 'product_tags')->where('id', $id)->first();
        $data['colors'] = Color::latest()->get();
        $data['sizes'] = Size::latest()->get();
        $data['tags'] = ProductTagList::get();
        $data['item_tags'] = ItemTag::get();
        if ($product_type == 'physical') {
            return $this->physicalProductEditView($data);
        } elseif ($product_type == 'digital') {
            return $this->digitalProductEditView($data);
        } elseif ($product_type == 'license') {
            return $this->licenseProductEditView($data);
        } else {
            return $this->affiliateProductEditView($data);
        }
    }

    public function physicalProductEditView($data)
    {
        return view('admin.pages.product.edit.physical', $data);
    }

    public function digitalProductEditView($data)
    {
        return view('admin.pages.product.edit.digital', $data);
    }

    public function licenseProductEditView($data)
    {
        return view('admin.pages.product.edit.license', $data);
    }

    public function affiliateProductEditView($data)
    {
        return view('admin.pages.product.edit.affiliate', $data);
    }

    public function productUpdate(Request $request)
    {
        $id = $request->id;
        $product = Product::where('id', $id)->first();
        $data = $request->except([
            'primary_image',
            'image_two',
            'image_three',
            'image_four',
            'image_five',
            'status',
            'feature',
            'best_sale',
            'on_sale',
            'on_arrival',
            'digital_file',
            'digital_link',
            'license_name',
            'license_key',
            'affiliate_link',
        ]);
        if (!empty($request->primary_image)) {
            $data['primary_image'] = fileUpload($request['primary_image'], ProductImage());
        } else {
            $data['primary_image'] = $product->Primary_Image;
        }
        if (!empty($request->image_two)) {
            $data['img_two'] = fileUpload($request['image_two'], ProductImage());
        } else {
            $data['img_two'] = $product->Image2;
        }

        if (!empty($request->image_three)) {
            $data['img_three'] = fileUpload($request['image_three'], ProductImage());
        } else {
            $data['img_three'] = $product->Image3;
        }
        if (!empty($request->image_four)) {
            $data['img_four'] = fileUpload($request['image_four'], ProductImage());
        } else {
            $data['img_four'] = $product->Image4;
        }
        if (!empty($request->image_five)) {
            $data['img_five'] = fileUpload($request['image_five'], ProductImage());
        } else {
            $data['img_five'] = $product->Image5;
        }

        $data['status'] = checkBoxValue($request->status);
        $data['feature'] = checkBoxValue($request->feature);
        $data['best_sale'] = checkBoxValue($request->best_sale);
        $data['on_sale'] = checkBoxValue($request->on_sale);
        $data['on_arrival'] = checkBoxValue($request->on_arrival);

        if ($product->type == PRODUCT_PHYSICAL) {
            $update = $this->physicalProductUpdate($data, $product);
        } elseif ($product->type == PRODUCT_DIGITAL) {
            if ($product->digital_type == 'file') {
                if (!empty($request->digital_file)) {
                    $data['digital_file'] = fileUpload($request['digital_file'], PRODUCT_DIGITAL_PRODUCT);
                    $data['digital_link'] = null;
                } else {
                    $data['digital_file'] = $product->digital_file;
                    $data['digital_link'] = null;
                }
            } else {
                $data['digital_file'] = null;
                $data['digital_link'] = is_null($request->digital_link) ? $product->digital_link : $request->digital_link;
            }
            $update = $this->digitalProductUpdate($data, $product);
        } elseif ($product->type == PRODUCT_LICENSE) {
            $data['license_name'] = is_null($request->license_name) ? $product->license_name : $request->license_name;
            $data['license_key'] = is_null($request->license_key) ? $product->license_link : $request->license_key;
            if ($product->digital_type == 'file') {
                if (!empty($request->digital_file)) {
                    $data['digital_file'] = fileUpload($request['digital_file'], PRODUCT_DIGITAL_PRODUCT);
                    $data['digital_link'] = null;
                } else {
                    $data['digital_file'] = $product->digital_file;
                    $data['digital_link'] = null;
                }
            } else {
                $data['digital_file'] = null;
                $data['digital_link'] = is_null($request->digital_link) ? $product->digital_link : $request->digital_link;
            }
            $update = $this->licenseProductUpdate($data, $product);
        } elseif ($product->type == PRODUCT_AFFILIATE) {
            $data['affiliate_link'] = is_null($request->affiliate_link) ? $product->affiliate_link : $request->affiliate_link;
            $update = $this->affiliateProductUpdate($data, $product);
        }

        if ($update['success'] == true) {
            return redirect()->route('admin.product')->with('success', __('Successfully Updated!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function physicalProductUpdate($data, $product)
    {
        $result = ['success' => false];

        $update = $product->update([
            'en_Product_Name' => is_null($data['en_product_name']) ? $product->en_Product_Name : $data['en_product_name'],
            'Brand_Id' => is_null($data['en_brand_name']) ? $product->Brand_Id : $data['en_brand_name'],
            'Category_Id' => is_null($data['en_category_name']) ? $product->Category_Id : $data['en_category_name'],
            'Price' => is_null($data['price']) ? $product->Price : $data['price'],
            'Discount' => is_null($data['discount']) ? $product->Discount : $data['discount'],
            'Discount_Price' => is_null($data['discount_price']) ? $product->Discount_Price : $data['discount_price'],
            'en_About' => is_null($data['en_about']) ? $product->en_About : $data['en_about'],
            'en_Description' => is_null($data['en_description']) ? $product->en_Description : $data['en_description'],
            'en_ShippingReturn' => is_null($data['en_shippingreturn']) ? $product->en_ShippingReturn : $data['en_shippingreturn'],
            'en_AdditionalInformation' => is_null($data['en_additionalinformation']) ? $product->en_AdditionalInformation : $data['en_additionalinformation'],
            'fr_Product_Name' => is_null($data['fr_product_name']) ? $product->fr_Product_Name : $data['fr_product_name'],
            'fr_About' => is_null($data['fr_about']) ? $product->fr_About : $data['fr_about'],
            'fr_Description' => is_null($data['fr_description']) ? $product->fr_Description : $data['fr_description'],
            'fr_ShippingReturn' => is_null($data['fr_shippingreturn']) ? $product->fr_ShippingReturn : $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => is_null($data['fr_additionalinformation']) ? $product->fr_AdditionalInformation : $data['fr_additionalinformation'],
            'Quantity' => is_null($data['qty']) ? $product->Quantity : $data['qty'],
            'ItemTag' => is_null($data['item_teg']) ? $product->ItemTag : $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'],
            'Image3' => $data['img_three'],
            'Image4' => $data['img_four'],
            'Image5' => $data['img_five'],

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
        ]);
        if (!empty($update)) {
            if (isset($data['product_tag'])) {
                ProductTag::where('product_id', $product->id)->delete();
                foreach ($data['product_tag'] as $rpt) {
                    ProductTag::create([
                        'tag' => $rpt,
                        'product_id' => $product->id,
                    ]);
                }
            }

            $pr = Product::find($product->id);
            if (isset($data['color'])) {
                DB::table('color_product')->where('Product_Id', $product->id)->delete();
                $colorsid = $data['color'];
                $pr->colors()->syncWithoutDetaching($colorsid);
            }

            if (isset($data['size'])) {
                DB::table('size_product')->where('Product_Id', $product->id)->delete();
                $sizeid = $data['size'];
                $pr->sizes()->syncWithoutDetaching($sizeid);
            }

            $result['success'] = true;
        }
        return $result;
    }

    public function digitalProductUpdate($data, $product)
    {
        $result = ['success' => false];
        $update = $product->update([
            'en_Product_Name' => is_null($data['en_product_name']) ? $product->en_Product_Name : $data['en_product_name'],
            'Brand_Id' => is_null($data['en_brand_name']) ? $product->Brand_Id : $data['en_brand_name'],
            'Category_Id' => is_null($data['en_category_name']) ? $product->Category_Id : $data['en_category_name'],
            'Price' => is_null($data['price']) ? $product->Price : $data['price'],
            'Discount' => is_null($data['discount']) ? $product->Discount : $data['discount'],
            'Discount_Price' => is_null($data['discount_price']) ? $product->Discount_Price : $data['discount_price'],
            'en_About' => is_null($data['en_about']) ? $product->en_About : $data['en_about'],
            'en_Description' => is_null($data['en_description']) ? $product->en_Description : $data['en_description'],
            'en_ShippingReturn' => is_null($data['en_shippingreturn']) ? $product->en_ShippingReturn : $data['en_shippingreturn'],
            'en_AdditionalInformation' => is_null($data['en_additionalinformation']) ? $product->en_AdditionalInformation : $data['en_additionalinformation'],
            'fr_Product_Name' => is_null($data['fr_product_name']) ? $product->fr_Product_Name : $data['fr_product_name'],
            'fr_About' => is_null($data['fr_about']) ? $product->fr_About : $data['fr_about'],
            'fr_Description' => is_null($data['fr_description']) ? $product->fr_Description : $data['fr_description'],
            'fr_ShippingReturn' => is_null($data['fr_shippingreturn']) ? $product->fr_ShippingReturn : $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => is_null($data['fr_additionalinformation']) ? $product->fr_AdditionalInformation : $data['fr_additionalinformation'],
            'Quantity' => is_null($data['qty']) ? $product->Quantity : $data['qty'],
            'ItemTag' => is_null($data['item_teg']) ? $product->ItemTag : $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'],
            'Image3' => $data['img_three'],
            'Image4' => $data['img_four'],
            'Image5' => $data['img_five'],

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
            'digital_file' => $data['digital_file'],
            'digital_link' => $data['digital_link'],
        ]);
        if (!empty($update)) {
            if (isset($data['product_tag'])) {
                ProductTag::where('product_id', $product->id)->delete();
                foreach ($data['product_tag'] as $rpt) {
                    ProductTag::create([
                        'tag' => $rpt,
                        'product_id' => $product->id,
                    ]);
                }
            }

            $result['success'] = true;
        }
        return $result;
    }

    public function licenseProductUpdate($data, $product)
    {
        $result = ['success' => false];
        $update = $product->update([
            'en_Product_Name' => is_null($data['en_product_name']) ? $product->en_Product_Name : $data['en_product_name'],
            'Brand_Id' => is_null($data['en_brand_name']) ? $product->Brand_Id : $data['en_brand_name'],
            'Category_Id' => is_null($data['en_category_name']) ? $product->Category_Id : $data['en_category_name'],
            'Price' => is_null($data['price']) ? $product->Price : $data['price'],
            'Discount' => is_null($data['discount']) ? $product->Discount : $data['discount'],
            'Discount_Price' => is_null($data['discount_price']) ? $product->Discount_Price : $data['discount_price'],
            'en_About' => is_null($data['en_about']) ? $product->en_About : $data['en_about'],
            'en_Description' => is_null($data['en_description']) ? $product->en_Description : $data['en_description'],
            'en_ShippingReturn' => is_null($data['en_shippingreturn']) ? $product->en_ShippingReturn : $data['en_shippingreturn'],
            'en_AdditionalInformation' => is_null($data['en_additionalinformation']) ? $product->en_AdditionalInformation : $data['en_additionalinformation'],
            'fr_Product_Name' => is_null($data['fr_product_name']) ? $product->fr_Product_Name : $data['fr_product_name'],
            'fr_About' => is_null($data['fr_about']) ? $product->fr_About : $data['fr_about'],
            'fr_Description' => is_null($data['fr_description']) ? $product->fr_Description : $data['fr_description'],
            'fr_ShippingReturn' => is_null($data['fr_shippingreturn']) ? $product->fr_ShippingReturn : $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => is_null($data['fr_additionalinformation']) ? $product->fr_AdditionalInformation : $data['fr_additionalinformation'],
            'Quantity' => is_null($data['qty']) ? $product->Quantity : $data['qty'],
            'ItemTag' => is_null($data['item_teg']) ? $product->ItemTag : $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'],
            'Image3' => $data['img_three'],
            'Image4' => $data['img_four'],
            'Image5' => $data['img_five'],

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
            'digital_file' => $data['digital_file'],
            'digital_link' => $data['digital_link'],
            'license_name' => $data['license_name'],
            'license_key' => $data['license_key'],
        ]);
        if (!empty($update)) {
            ProductTag::where('product_id', $product->id)->delete();
            foreach ($data['product_tag'] as $rpt) {
                ProductTag::create([
                    'tag' => $rpt,
                    'product_id' => $product->id,
                ]);
            }
            $result['success'] = true;
        }
        return $result;
    }

    public function affiliateProductUpdate($data, $product)
    {
        $result = ['success' => false];
        $update = $product->update([
            'en_Product_Name' => is_null($data['en_product_name']) ? $product->en_Product_Name : $data['en_product_name'],
            'Brand_Id' => is_null($data['en_brand_name']) ? $product->Brand_Id : $data['en_brand_name'],
            'Category_Id' => is_null($data['en_category_name']) ? $product->Category_Id : $data['en_category_name'],
            'Price' => is_null($data['price']) ? $product->Price : $data['price'],
            'Discount' => is_null($data['discount']) ? $product->Discount : $data['discount'],
            'Discount_Price' => is_null($data['discount_price']) ? $product->Discount_Price : $data['discount_price'],
            'en_About' => is_null($data['en_about']) ? $product->en_About : $data['en_about'],
            'en_Description' => is_null($data['en_description']) ? $product->en_Description : $data['en_description'],
            'en_ShippingReturn' => is_null($data['en_shippingreturn']) ? $product->en_ShippingReturn : $data['en_shippingreturn'],
            'en_AdditionalInformation' => is_null($data['en_additionalinformation']) ? $product->en_AdditionalInformation : $data['en_additionalinformation'],
            'fr_Product_Name' => is_null($data['fr_product_name']) ? $product->fr_Product_Name : $data['fr_product_name'],
            'fr_About' => is_null($data['fr_about']) ? $product->fr_About : $data['fr_about'],
            'fr_Description' => is_null($data['fr_description']) ? $product->fr_Description : $data['fr_description'],
            'fr_ShippingReturn' => is_null($data['fr_shippingreturn']) ? $product->fr_ShippingReturn : $data['fr_shippingreturn'],
            'fr_AdditionalInformation' => is_null($data['fr_additionalinformation']) ? $product->fr_AdditionalInformation : $data['fr_additionalinformation'],
            'Quantity' => is_null($data['qty']) ? $product->Quantity : $data['qty'],
            'ItemTag' => is_null($data['item_teg']) ? $product->ItemTag : $data['item_teg'],
            'Primary_Image' => $data['primary_image'],
            'Image2' => $data['img_two'],
            'Image3' => $data['img_three'],
            'Image4' => $data['img_four'],
            'Image5' => $data['img_five'],

            'Status' => $data['status'],
            'Featured_Product' => $data['feature'],
            'Best_Selling' => $data['best_sale'],
            'On_Sale' => $data['on_sale'],
            'New_Arrival' => $data['on_arrival'],
            'affiliate_link' => $data['affiliate_link'],
        ]);
        if (!empty($update)) {
            ProductTag::where('product_id', $product->id)->delete();
            foreach ($data['product_tag'] as $rpt) {
                ProductTag::create([
                    'tag' => $rpt,
                    'product_id' => $product->id,
                ]);
            }
            $result['success'] = true;
        }
        return $result;
    }

    public function slugify($text)
    {

        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        $text = preg_replace('~[^-\w]+~', '', $text);

        $text = trim($text, '-');

        $text = preg_replace('~-+~', '-', $text);

        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    public  function generateRandomString($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
