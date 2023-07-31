<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\GeneralSettings;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class GeneralSettingsController extends Controller
{
    public function GeneralSettings()
    {
        $data['title'] = __('General Settings');
        return view('admin.pages.general_settings.index', $data);
    }
    public  function GeneralSettingsEdit($id)
    {
        $data['title'] = __('Edit Settings');
        $data['edit'] = GeneralSettings::where('id', $id)->first();
        return view('admin.pages.general_settings.edit', $data);
    }

    public function GeneralSettingsUpdate(Request $request)
    {
        $id = $request->id;
        $gs = GeneralSettings::where('id', $id)->first();
        if (!empty($request->logo)) {
            $logo = fileUpload($request['logo'], GeneralSettingsImage());
        } else {

            $logo = $gs->Logo;
        }

        if (!empty($request->favicon)) {
            $favicon = fileUpload($request['favicon'], GeneralSettingsImage());
        } else {
            $favicon = $gs->Favicon;
        }
        $general = GeneralSettings::where('id', $id)->update([
            'Title' => is_null($request->title) ? $gs->Title : $request->title,
            'MetaDescription' => is_null($request->metadescription) ? $gs->MetaDescription : $request->metadescription,
            'MetaKeywords' => is_null($request->metakeywords) ? $gs->MetaKeywords : $request->metakeywords,
            'MetaAuthor' => is_null($request->metaauthor) ? $gs->MetaAuthor : $request->metaauthor,
            'Logo' => $logo,
            'Favicon' => $favicon,
        ]);
        if ($general) {
            return redirect()->route('admin.general.settings')->with('success', __('Successfully Updated !'));
        }
        return redirect()->route('admin.general.settings')->with('success', __('Does not Updated !'));
    }

    public function updateSettings(Request $request)
    {
        try {
            if (isset($request->app_title)) {
                Setting::where('slug', 'app_title')->update(['value' => $request->app_title]);
            }
            if (isset($request->estimating_delivery)) {
                Setting::where('slug', 'estimating_delivery')->update(['value' => $request->estimating_delivery]);
            }
            if (isset($request->shipping_charge)) {
                Setting::where('slug', 'shipping_charge')->update(['value' => $request->shipping_charge]);
            }
            if (isset($request->title)) {
                Setting::where('slug', 'title')->update(['value' => $request->title]);
            }
            if (isset($request->meta_author)) {
                Setting::where('slug', 'meta_author')->update(['value' => $request->meta_author]);
            }
            if (isset($request->meta_description)) {
                Setting::where('slug', 'meta_description')->update(['value' => $request->meta_description]);
            }
            if (isset($request->call_us)) {
                Setting::where('slug', 'call_us')->update(['value' => $request->call_us]);
            }
            if (isset($request->email)) {
                Setting::where('slug', 'email')->update(['value' => $request->email]);
            }
            if (isset($request->address)) {
                Setting::where('slug', 'address')->update(['value' => $request->address]);
            }
            if (isset($request->state)) {
                Setting::where('slug', 'state')->update(['value' => $request->state]);
            }
            if (isset($request->country)) {
                Setting::where('slug', 'country')->update(['value' => $request->country]);
            }
            if (isset($request->news_letter)) {
                Setting::where('slug', 'news_letter')->update(['value' => $request->news_letter]);
            }
            if (isset($request->default_currency)) {

                Setting::where('slug', 'default_currency')->update(['value' => $request->default_currency]);

                Session::put('currency', $request->default_currency);
            }
            if (isset($request->default_language)) {
                Setting::where('slug', 'default_language')->update(['value' => $request->default_language]);
            }
            if (isset($request->meta_keywords)) {
                Setting::where('slug', 'meta_keywords')->update(['value' => $request->meta_keywords]);
            }
            if (isset($request->menu_link)) {
                Setting::where('slug', 'menu_link')->update(['value' => $request->menu_link]);
            }
            if (isset($request->footer_title)) {
                Setting::where('slug', 'footer_title')->update(['value' => $request->footer_title]);
            }
            if (isset($request->news_letter_title)) {
                Setting::where('slug', 'news_letter_title')->update(['value' => $request->news_letter_title]);
            }
            if (isset($request->news_letter_status)) {
                Setting::where('slug', 'news_letter_status')->update(['value' => $request->news_letter_status]);
            }
            if (isset($request->main_logo)) {
                Setting::where('slug', 'main_logo')->update(['value' => fileUpload($request->main_logo, IMG_LOGO_PATH)]);
            }
            if (isset($request->footer_logo)) {
                Setting::where('slug', 'footer_logo')->update(['value' => fileUpload($request->footer_logo, IMG_LOGO_PATH)]);
            }
            if (isset($request->favicon)) {
                Setting::where('slug', 'favicon')->update(['value' => fileUpload($request->favicon, IMG_FAVICON_PATH)]);
            }
            if (isset($request->preloader)) {
                // Setting::where('slug', 'preloader')->update(['value' => fileUpload($request->preloader, IMG_PRELOADER_PATH)]);
                $image = $request->file('preloader');
                $filename = uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $image->move(IMG_PRELOADER_PATH, $filename);
                Setting::where('slug', 'preloader')->update(['value' => $filename]);
            }
            if (isset($request->news_letter_img)) {
                Setting::where('slug', 'news_letter_img')->update(['value' => fileUpload($request->news_letter_img, IMG_FOOTER_PATH)]);
            }
            if (isset($request->popup_image)) {
                Setting::where('slug', 'popup_image')->update(['value' => fileUpload($request->popup_image, IMG_ADVERTISE_PATH)]);
            }
            if (isset($request->menu_thumb)) {
                Setting::where('slug', 'menu_thumb')->update(['value' => fileUpload($request->menu_thumb, IMG_ADVERTISE_PATH)]);
            }
            return redirect()->back()->with('success', __('Successfully Updated!'));
        } catch (\Exception $e) {

            return redirect()->back()->with('error', __('Something went wrong!'));
        }
    }

    public function updateSocialLogin(Request $request)
    {
        $env_val['GOOGLE_CLIENT_ID'] = $request->google_client_id;
        $env_val['GOOGLE_CLIENT_SECRET'] = $request->google_client_secret;
        $env_val['GOOGLE_CALLBACK_URL'] = $request->google_callback_url;
        $env_val['FACEBOOK_CLIENT_ID'] = $request->facebook_client_id;
        $env_val['FACEBOOK_CLIENT_SECRET'] = $request->facebook_client_secret;
        $env_val['FACEBOOK_CALLBACK_URL'] = $request->facebook_callback_url;

        $update = $this->setEnvValue($env_val);

        if ($update == true) {
            return redirect()->back()->with('success', __('Successfully Updated!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function updateEmail(Request $request)
    {
        $env_val['MAIL_HOST'] = $request->mail_host;
        $env_val['MAIL_PORT'] = $request->mail_port;
        $env_val['MAIL_USERNAME'] = $request->mail_username;
        $env_val['MAIL_PASSWORD'] = $request->mail_password;
        $env_val['MAIL_ENCRYPTION'] = $request->mail_encryption;
        $env_val['MAIL_FROM_ADDRESS'] = $request->mail_from_address;

        $update = $this->setEnvValue($env_val);

        if ($update == true) {
            return redirect()->back()->with('success', __('Successfully Updated!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function setEnvValue($values)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);
        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {
                $envValue = '"' . trim($envValue) . '"';
                $str .= "\n";
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }
            }
        }
        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) return false;
        return true;
    }
}
