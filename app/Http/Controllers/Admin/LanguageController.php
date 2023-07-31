<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    public function languageList()
    {
        $data['title'] = __('Language Settings');
        $data['languages'] = Language::get();
        return view('admin.pages.language.list', $data);
    }

    public function languageEdit($id)
    {
        $data = Language::find($id);
        $data_results = file_get_contents(resource_path() . '/lang/' . $data->file);
        $lang = json_decode($data_results, true);
        $title = __('Edit Language');
        return view('admin.pages.language.edit', compact('data', 'lang', 'title'));
    }

    public function languageUpdate(Request $request, $id)
    {
        $new = null;
        $data = Language::find($id);
        if (file_exists(resource_path() . '/lang/' . $data->file)) {
            unlink(resource_path() . '/lang/' . $data->file);
        }
        $name = time() . Str::random(8);
        if (!empty($request->thumb)) {
            $thumb = fileUpload($request['thumb'], BlogImage());
        } else {
            $thumb = $data->thumb;
        }
        $data->name = is_null($request->name) ? $data->name : $request->name;
        $data->direction = is_null($request->direction) ? $data->direction : $request->direction;
        $data->thumb = $thumb;
        $data->status = $request->status;
        $data->update();
        $getLang = Language::where('status', 1)->first();
        if (!$getLang) {
            $data->status = 1;
            $data->update();
            session(['APP_LOCALE' => $data->locale, 'lang_dir' => $data->direction]);
        }
        if ($data->status != 1) {
            $locale = $data->locale == 'en' ? 'fr' : 'en';
            $direction = $data->locale == 'en' ? 'rtl' : 'ltr';
            session(['APP_LOCALE' => $locale, 'lang_dir' => $direction]);
        }

        $keys = $request->keys;
        $values = $request->values;
        foreach (array_combine($keys, $values) as $key => $value) {
            $n = str_replace("_", " ", $key);
            $new[$n] = $value;
        }
        $mydata = json_encode($new);
        file_put_contents(resource_path() . '/lang/' . $data->file, $mydata);

        return redirect()->back()->with('success', __('Language Updated Successfully.'));
    }
}
