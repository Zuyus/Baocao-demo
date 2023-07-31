<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CurrencyStoreRequest;
use App\Models\Currency;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CurrencyController extends Controller
{
    public function currencyList(Request $request)
    {
        if ($request->ajax()) {
            $data = Currency::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('currency', function($data) {
                    $comment = '';
                    if (currency() == $data->currency)
                    {
                        $comment = '<span class="status active">Default Currency</span>';
                    }
                    return $data->currency . ' ' . $comment;
                })
                ->addColumn('action', function ($data) {
                    if ($data->currency == 'USD') {
                        return '<span class="status active">Main Currency</span>';
                    } else {
                        $btn = '<div class="action__buttons">';
                        $btn = $btn . '<a href="javascript:void(0)" class="btn-action" data-bs-toggle="modal" data-bs-target="#editModal' . $data->id . '"><i class="fa-solid fa-pen-to-square"></i></a>';
                        $btn = $btn . '<a href="' . route('admin.delete_currency', encrypt($data->id)) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                        $btn = $btn . '</div>';
                        return $btn;
                    }
                })
                ->rawColumns(['action', 'currency'])
                ->make(true);
        }
        $data['title'] = __('Currency List');
        $data['currency'] = Currency::get();
        return view('admin.pages.currency.index', $data);
    }

    public function storeCurrency(CurrencyStoreRequest $request)
    {
        $create = Currency::create([
            'currency' => $request->currency,
            'iso' => $request->iso,
            'symbol' => $request->symbol,
            'position' => $request->position,
            'convert_from_usd' => $request->convert_from_usd,
        ]);

        if (!empty($create)) {
            return redirect()->back()->with('success', __('Currency Add successfully!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function updateCurrency(Request $request, $id)
    {
        $id = decrypt($id);
        $currency = Currency::whereId($id)->first();
        if (!is_null($currency)) {
            $update = $currency->update([
                'currency' => is_null($request->currency) ? $currency->currency : $request->currency,
                'iso' => is_null($request->iso) ? $currency->iso : $request->iso,
                'symbol' => is_null($request->symbol) ? $currency->symbol : $request->symbol,
                'convert_from_usd' => is_null($request->convert_from_usd) ? $currency->convert_from_usd : $request->convert_from_usd,
                'position' => $request->position,
            ]);
            if (!empty($update)) {
                return redirect()->back()->with('success', __('Currency Updated Successfully!'));
            }
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function deleteCurrency($id)
    {
        $id = decrypt($id);
        $currency = Currency::whereId($id)->delete();
        if (!empty($currency)) {
            return redirect()->back()->with('success', __('Currency Deleted Successfully!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }
}
