@extends('layouts.app')
@section('title', 'Users')
@section('content')

<div class="w-full border rounded-md p-4">
    <h1 class="pb-2">
        <span class="text-lg font-medium">Permission for the role of</span>
        <b class="text-xl italic uppercase">Super Admin:</b>
    </h1>
    <hr>
    <div class="w-full py-4 gap-3 divide-x divide-gray-300">
        <button type="button" onclick="scrollToSection('sectionusers')" class="px-2 py-0 text-sm font-medium">Super Admin</button>
        <button type="button" onclick="scrollToSection('sectionproducts')" class="px-2 py-0 text-sm font-medium">Manager</button>
        <button type="button" onclick="scrollToSection('sectionroles')" class="px-2 py-0 text-sm font-medium">HR</button>
        <button type="button" onclick="scrollToSection('sectioncategories')" class="px-2 py-0 text-sm font-medium">Team Lead</button>
        <button type="button" onclick="scrollToSection('sectionsuppliers')" class="px-2 py-0 text-sm font-medium">User</button>
    </div>
    <form action="#" method="POST" enctype="multipart/form-data"> 
        @csrf 
      <div class="grid md:grid-cols-2 rounded-[5px] gap-x-10 gap-y-4">
        <div class="py-4" id="sectionusers">
          <div class="rounded-[5px] shadow-lg shadow-slate-100 bg-slate-50 shadow-slate-400 border border-1 border-t-[3px] border-t-[#DC2626] p-5 pt-3">
            <div class="flex justify-between items-center">
              <h3 class="text-xl font-semibold">Manage Users <span class="text-medium text-gray-500 text-sm">(permission)</span>
              </h3>
              <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                <span class="label-text">Select All</span>
                <input type="checkbox" name="all" value="0" class="checkbox checkbox-sm checkbox-info ml-2 selectAllCheckbox" data-section="users" checked="">
              </label>
            </div>
            <hr class="my-2">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 ">
              <div class="col-span-3">
                <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                  <span class="label-text">Edit</span>
                  <input type="checkbox" name="permissionId[]" value="3" class="checkbox checkbox-sm checkbox-info ml-2 permissionCheckbox" checked="">
                </label>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 ">
              <div class="col-span-3">
                <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                  <span class="label-text">Create</span>
                  <input type="checkbox" name="permissionId[]" value="2" class="checkbox checkbox-sm checkbox-info ml-2 permissionCheckbox" checked="">
                </label>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 ">
              <div class="col-span-3">
                <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                  <span class="label-text">View</span>
                  <input type="checkbox" name="permissionId[]" value="1" class="checkbox checkbox-sm checkbox-info ml-2 permissionCheckbox" checked="">
                </label>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 ">
              <div class="col-span-3">
                <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                  <span class="label-text">Delete</span>
                  <input type="checkbox" name="permissionId[]" value="4" class="checkbox checkbox-sm checkbox-info ml-2 permissionCheckbox" checked="">
                </label>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 ">
              <div class="col-span-3">
                <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                  <span class="label-text">Permanent Delete</span>
                  <input type="checkbox" name="permissionId[]" value="5" class="checkbox checkbox-sm checkbox-info ml-2 permissionCheckbox" checked="">
                </label>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select All checkboxes
        const selectAllCheckboxes = document.querySelectorAll('.selectAllCheckbox');

        // Permission checkboxes
        const permissionCheckboxes = document.querySelectorAll('.permissionCheckbox');

        // Add event listener to each Select All checkbox
        selectAllCheckboxes.forEach(function (selectAllCheckbox) {
            selectAllCheckbox.addEventListener('change', function () {
                const isChecked = this.checked;
                const sectionId = this.getAttribute('data-section');

                // Set the state of permission checkboxes within the corresponding section
                permissionCheckboxes.forEach(function (checkbox) {
                    if (checkbox.closest(`#section${sectionId}`)) {
                        checkbox.checked = isChecked;
                    }
                });
            });
        });
    });


</script>

@endsection