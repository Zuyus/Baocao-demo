<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Http\Requests\SubmenuStoreRequest;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function staticMenus()
    {
        $data['menus'] = Menu::where('is_static', ACTIVE)->get();
        $data['title'] = __('Static Menu List');
        return view('admin.pages.menus.static', $data);
    }

    public function editStaticMenu($id)
    {
        $id = decrypt($id);
        $menu = Menu::whereId($id)->first();
        if (!is_null($menu)) {
            $data['menu'] = $menu;
            $data['title'] = __('Edit Static Menu');
            return view('admin.pages.menus.edit-static', $data);
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function dynamicMenus()
    {
        $data['menus'] = Menu::where('is_static', '!=', ACTIVE)->get();
        $data['title'] = __('Dynamic Menu List');
        return view('admin.pages.menus.dynamic', $data);
    }

    public function createMenu()
    {
        $data['title'] = __('Create Menu');
        return view('admin.pages.menus.create', $data);
    }

    public function storeMenu(MenuStoreRequest $request)
    {
        $create = Menu::create([
            'en_name' => $request->en_name,
            'fr_name' => $request->fr_name,
            'url' => $request->url,
            'status' => $request->status,
        ]);

        if (!empty($create)) {
            return redirect()->route('admin.dynamic_menus')->with('toast_status', __('Menu Successfully Created!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function editMenu($id)
    {
        $id = decrypt($id);
        $menu = Menu::whereId($id)->first();
        if (!is_null($menu)) {
            $data['menu'] = $menu;
            $data['title'] = __('Menu');
            return view('admin.pages.menus.edit', $data);
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function updateMenu(Request $request, $id)
    {
        $id = decrypt($id);
        $menu = Menu::whereId($id)->first();
        if (!is_null($menu)) {
            $update = $menu->update([
                'en_name' => is_null($request->en_name) ? $menu->en_name : $request->en_name,
                'fr_name' => is_null($request->fr_name) ? $menu->fr_name : $request->fr_name,
                'url' => is_null($request->url) ? $menu->url : $request->url,
                'status' => is_null($request->status) ? $menu->status : $request->status,
            ]);

            if (!empty($update)) {
                return redirect()->back()->with('success', __('Successfully Updated!'));
            }
        }
        return redirect()->back()->with('error', __('No menu found!'));
    }

    public function deleteMenu($id)
    {
        $id = decrypt($id);
        $menu = Menu::whereId($id)->delete();
        if (!is_null($menu)) {
            return redirect()->back()->with('success', __('Successfully Deleted!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function submenus()
    {
        $data['menus'] = SubMenu::with('menu')->get();
        $data['title'] = __('Static Menu List');
        return view('admin.pages.submenu.index', $data);
    }

    public function createSubmenu()
    {
        $data['title'] = __('Create Submenu');
        $data['menus'] = Menu::where('is_static', INACTIVE)->latest()->get();
        return view('admin.pages.submenu.create', $data);
    }

    public function storeSubmenu(SubmenuStoreRequest $request)
    {
        $create = SubMenu::create([
            'menu_id' => $request->menu_id,
            'en_name' => $request->en_name,
            'fr_name' => $request->fr_name,
            'url' => $request->url,
            'status' => $request->status,
        ]);

        if (!empty($create)) {
            return redirect()->route('admin.submenus')->with('toast_status', __('Menu Successfully Created!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function editSubmenu($id)
    {
        $id = decrypt($id);
        $submenu = SubMenu::with('menu')->whereId($id)->first();
        if (!is_null($submenu)) {
            $data['submenu'] = $submenu;
            $data['menus'] = Menu::where('is_static', INACTIVE)->latest()->get();
            $data['title'] = __('Menu');
            return view('admin.pages.submenu.edit', $data);
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function updateSubmenu(Request $request, $id)
    {
        $id = decrypt($id);
        $menu = SubMenu::whereId($id)->first();
        if (!is_null($menu)) {
            $update = $menu->update([
                'menu_id' => is_null($request->menu_id) ? $menu->menu_id : $request->menu_id,
                'en_name' => is_null($request->en_name) ? $menu->en_name : $request->en_name,
                'fr_name' => is_null($request->fr_name) ? $menu->fr_name : $request->fr_name,
                'url' => is_null($request->url) ? $menu->url : $request->url,
                'status' => is_null($request->status) ? $menu->status : $request->status,
            ]);

            if (!empty($update)) {
                return redirect()->back()->with('success', __('Successfully Updated!'));
            }
        }
        return redirect()->back()->with('error', __('No menu found!'));
    }

    public function deleteSubmenu($id)
    {
        $id = decrypt($id);
        $menu = SubMenu::whereId($id)->delete();
        if (!is_null($menu)) {
            return redirect()->back()->with('success', __('Successfully Deleted!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }
}
