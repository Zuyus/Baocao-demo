<?php

namespace Database\Seeders;

use App\Models\Admin\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class
ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //product
        Product::create([
            'Category_Id' => 1,
            'Brand_Id' => 1,
            'en_Product_Name' => 'Plaid Cotton Shirt',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'plaid-cotton-shirt',
            'fr_Product_Slug' => 'chemise-oxford-en-a-carreaux',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 100.00,
            'Discount' => 10.00,
            'Discount_Price' => 90.00,
            'Quantity' => 44,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-1.png',
            'Image2' => 'product-image-1.png',
            'Image3' => 'product-image-1.png',
            'Image4' => 'product-image-1.png',
            'Image5' => 'product-image-1.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 0,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'HlDpoX',
        ]);

        Product::create([
            'Category_Id' => 2,
            'Brand_Id' => 2,
            'en_Product_Name' => 'Black T-Shirt',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'black-t-shirt',
            'fr_Product_Slug' => 't-shirt-noir-pour-femme',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'HOT',
            'Price' => 150.00,
            'Discount' => 10.00,
            'Discount_Price' => 135.00,
            'Quantity' => 12,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-2.png',
            'Image2' => 'product-image-2.png',
            'Image3' => 'product-image-2.png',
            'Image4' => 'product-image-2.png',
            'Image5' => 'product-image-2.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 0,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => '3ymslU',
        ]);

        Product::create([
            'Category_Id' => 3,
            'Brand_Id' => 3,
            'en_Product_Name' => 'Fit-Flare Dress',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'fit-flare-dress',
            'fr_Product_Slug' => 'robe-ajustee-evasee',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 200.00,
            'Discount' => 10.00,
            'Discount_Price' => 180.00,
            'Quantity' => 40,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-3.png',
            'Image2' => 'product-image-3.png',
            'Image3' => 'product-image-3.png',
            'Image4' => 'product-image-3.png',
            'Image5' => 'product-image-3.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => '9jHB5z',
        ]);

        Product::create([
            'Category_Id' => 3,
            'Brand_Id' => 3,
            'en_Product_Name' => 'Fit-Flare Dress',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'fit-flare-dress-2',
            'fr_Product_Slug' => 'robe-ajustee-evasee-2',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 200.00,
            'Discount' => 10.00,
            'Discount_Price' => 180.00,
            'Quantity' => 40,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-4.png',
            'Image2' => 'product-image-4.png',
            'Image3' => 'product-image-4.png',
            'Image4' => 'product-image-4.png',
            'Image5' => 'product-image-4.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'un86s3',
        ]);

        Product::create([
            'Category_Id' => 1,
            'Brand_Id' => 1,
            'en_Product_Name' => 'Rosmo Namino',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'rosmo-namino',
            'fr_Product_Slug' => 'chemise-oxford-en-à-carreaux',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 500.00,
            'Discount' => 10.00,
            'Discount_Price' => 450.00,
            'Quantity' => 10,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-5.png',
            'Image2' => 'product-image-5.png',
            'Image3' => 'product-image-5.png',
            'Image4' => 'product-image-5.png',
            'Image5' => 'product-image-5.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'r943nr',
        ]);

        Product::create([
            'Category_Id' => 1,
            'Brand_Id' => 1,
            'en_Product_Name' => 'Plaid Cotton Shirt',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'plaid-cotton-shirt-2',
            'fr_Product_Slug' => 'chemise-oxford-en-à-carreaux',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 500.00,
            'Discount' => 10.00,
            'Discount_Price' => 450.00,
            'Quantity' => 10,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-6.png',
            'Image2' => 'product-image-6.png',
            'Image3' => 'product-image-6.png',
            'Image4' => 'product-image-6.png',
            'Image5' => 'product-image-6.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'HRGoVv',
        ]);

        Product::create([
            'Category_Id' => 2,
            'Brand_Id' => 2,
            'en_Product_Name' => 'Tailored Fit Mesh-Panel',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'tailored-fit-mesh-panel',
            'fr_Product_Slug' => 'demo-physical',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'HOT',
            'Price' => 500.00,
            'Discount' => 10.00,
            'Discount_Price' => 450.00,
            'Quantity' => 9,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-7.png',
            'Image2' => 'product-image-7.png',
            'Image3' => 'product-image-7.png',
            'Image4' => 'product-image-7.png',
            'Image5' => 'product-image-7.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'FXZfan',
        ]);

        Product::create([
            'Category_Id' => 3,
            'Brand_Id' => 2,
            'en_Product_Name' => 'Rosmo Namino',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'rosmo-namino-2',
            'fr_Product_Slug' => 'demo-digital',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'HOT',
            'Price' => 500.00,
            'Discount' => 10.00,
            'Discount_Price' => 450.00,
            'Quantity' => 10000,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-8.png',
            'Image2' => 'product-image-8.png',
            'Image3' => 'product-image-8.png',
            'Image4' => 'product-image-8.png',
            'Image5' => 'product-image-8.png',
            'digital_type' => 'file',
            'digital_link' => null,
            'digital_file' => '623c619be751f1648124315.jpg',
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 2,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 's74Qkd',
        ]);

        Product::create([
            'Category_Id' => 3,
            'Brand_Id' => 1,
            'en_Product_Name' => 'Best T-Shirt for Male',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'Best-t-Shirt-for-male',
            'fr_Product_Slug' => 'demo-affiliate',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 500.00,
            'Discount' => 10.00,
            'Discount_Price' => 450.00,
            'Quantity' => 10000,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-1.png',
            'Image2' => 'product-image-1.png',
            'Image3' => 'product-image-1.png',
            'Image4' => 'product-image-1.png',
            'Image5' => 'product-image-1.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => 'http://www.zainiklab.com',
            'type' => 4,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'WSm04k',
        ]);

        Product::create([
            'Category_Id' => 3,
            'Brand_Id' => 1,
            'en_Product_Name' => 'Rosmo Namino',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'rosmo-namino-3',
            'fr_Product_Slug' => 'men-shirt-custom-shirts-hot-sale-men-women-polyester-cotton-long-sleeve-casual-pro',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 1894.00,
            'Discount' => 29.00,
            'Discount_Price' => 1344.74,
            'Quantity' => 8,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-2.png',
            'Image2' => 'product-image-2.png',
            'Image3' => 'product-image-2.png',
            'Image4' => 'product-image-2.png',
            'Image5' => 'product-image-2.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'tjzKSe',
        ]);

        Product::create([
            'Category_Id' => 3,
            'Brand_Id' => 3,
            'en_Product_Name' => 'Fit-Flare Dress',
            'fr_Product_Name' => 'قميص قطني منقوش',
            'en_Product_Slug' => 'fit-flare-dress-2',
            'fr_Product_Slug' => 'robe-ajustee-evasee',
            'en_About' => 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.',
            'fr_About' => 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في',
            'ItemTag' => 'NEW',
            'Price' => 200.00,
            'Discount' => 10.00,
            'Discount_Price' => 180.00,
            'Quantity' => 40,
            'Sold' => 0.00,
            'Primary_Image' => 'product-image-3.png',
            'Image2' => 'product-image-3.png',
            'Image3' => 'product-image-3.png',
            'Image4' => 'product-image-3.png',
            'Image5' => 'product-image-3.png',
            'digital_type' => null,
            'digital_link' => null,
            'digital_file' => null,
            'license_name' => null,
            'license_key' => null,
            'affiliate_link' => null,
            'type' => 1,
            'Featured_Product' => 1,
            'Best_Selling' => 1,
            'New_Arrival' => 1,
            'On_Sale' => 1,
            'Status' => 1,
            'en_Description' => '<p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                                <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                                <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>',
            'fr_Description' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_ShippingReturn' => '<p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                    <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>',
            'fr_ShippingReturn' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>',
            'en_AdditionalInformation' => '<p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                        <ul class="additional-feature">
                            <li class="single-feature">
                                <h3 class="feature-title">Comodous:</h3>
                                <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Mattis laoreet:</h3>
                                <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Divamus de ametos:</h3>
                                <p class="feature-text">Divamus sit amet purus justo</p>
                            </li>
                            <li class="single-feature">
                                <h3 class="feature-title">Molestie:</h3>
                                <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                            </li>
                        </ul>',
            'fr_AdditionalInformation' => '<p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class="description-text">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class="additional-feature"><li class="single-feature">
                            </li>
                        </ul>',
            'Voucher' => 'LI4MOB',
        ]);


        //size
        DB::table('size_product')->insert(
            array('Product_Id' =>  6,'Size_Id' => 1 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  4,'Size_Id' => 1 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  4,'Size_Id' => 3 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  3,'Size_Id' => 1 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  3,'Size_Id' => 4 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  2,'Size_Id' => 3 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  2,'Size_Id' => 4 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  1,'Size_Id' => 1 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  1,'Size_Id' => 2 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  7,'Size_Id' => 1 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  10,'Size_Id' => 1 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  10,'Size_Id' => 2 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  10,'Size_Id' => 3 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  10,'Size_Id' => 4 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  10,'Size_Id' => 5 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  11,'Size_Id' => 2 )
        );
        DB::table('size_product')->insert(
            array('Product_Id' =>  5,'Size_Id' => 1 )
        );

        //color
        DB::table('color_product')->insert(
            array('Product_Id' => 6,'Color_Id' => 1 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 4,'Color_Id' => 1 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 4,'Color_Id' => 3 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 3,'Color_Id' => 1 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 3,'Color_Id' => 4 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 2,'Color_Id' => 3 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 2,'Color_Id' => 4 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 1,'Color_Id' => 1 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 1,'Color_Id' => 2 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 7,'Color_Id' => 1 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 10,'Color_Id' => 1 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 10,'Color_Id' => 2 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 11,'Color_Id' => 1 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 11,'Color_Id' => 2 )
        );
        DB::table('color_product')->insert(
            array('Product_Id' => 5,'Color_Id' => 1 )
        );

    }


    public  function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
