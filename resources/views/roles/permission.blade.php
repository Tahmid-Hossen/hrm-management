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
       @foreach($categoriWisePermission as $key => $permission)
                <button type="button" onclick="scrollToSection('section{{$key}}')" class="px-2 py-0 text-sm font-medium">{{ ucfirst($key) }}</button>
        @endforeach

        <!-- <button type="button" onclick="scrollToSection('sectionusers')" class="px-2 py-0 text-sm font-medium">Super Admin</button>
        <button type="button" onclick="scrollToSection('sectionproducts')" class="px-2 py-0 text-sm font-medium">Manager</button>
        <button type="button" onclick="scrollToSection('sectionroles')" class="px-2 py-0 text-sm font-medium">HR</button>
        <button type="button" onclick="scrollToSection('sectioncategories')" class="px-2 py-0 text-sm font-medium">Team Lead</button>
        <button type="button" onclick="scrollToSection('sectionsuppliers')" class="px-2 py-0 text-sm font-medium">User</button> -->
    </div>
    <form action="{{ route('permission.update', $role->id)}}" method="POST" enctype="multipart/form-data"> 
        @csrf 
      <div class="grid md:grid-cols-2 rounded-[5px] gap-x-10 gap-y-4">
        @foreach($categoriWisePermission as $key=>$permission)
                @php
                    $i = 0;
                    $n = count($permission);
                    foreach ($permission as $item) {
                        if (in_array($item->id, $existingPermissionsIds)) {
                            $i++;
                        }
                    }
                @endphp
        <div class="py-4" id="section{{ $key}}">
          <div class="rounded-[5px] shadow-lg shadow-slate-100 bg-slate-50 shadow-slate-400 border border-1 border-t-[3px] border-t-[#DC2626] p-5 pt-3">
            <div class="flex justify-between items-center">
              <h3 class="text-xl font-semibold">Manage {{ $key}} <span class="text-medium text-gray-500 text-sm">(permission)</span>
              </h3>
              <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                <span class="label-text">Select All</span>
                   <input type="checkbox" name="all" value="0" class="checkbox checkbox-sm checkbox-info ml-2 selectAllCheckbox" data-section="{{ $key }}" {{$i==$n ? 'checked' : ''}}>
              </label>
            </div>
            <hr class="my-2">
              @foreach($permission as $item)
              <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 ">
                  <div class="col-span-3">
                      <label class="cursor-pointer label flex justify-between items-center gap-y-6 rounded-md hover:bg-slate-200">
                          <span class="label-text">{{$item->label}}</span>
                          <input type="checkbox" name="permissionId[]" value="{{ $item->id }}" class="checkbox checkbox-sm checkbox-info ml-2 permissionCheckbox" {{ in_array($item->id, $existingPermissionsIds) ? 'checked' : '' }}>
                      </label>
                  </div>
              </div>

              @endforeach
          </div>
        </div>

         @endforeach
        
        <div class="col-span-3 flex justify-end items-center gap-2 relative mt-8 mb-0">
            <div class="flex justify-center items-center mb-3 rounded-md transition duration-150 ease-in-out relative" role="group">
                <button type="submit" class="inline-flex justify-end items-center gap-x-3 rounded-l bg-[#029397] hover:bg-[#173344] text-white font-medium leading-normal  transition duration-150 ease-in-out focus:bg-[#173344] focus:outline-none focus:ring-0 active:bg-[#223846e7] mr-[-8px] py-2 px-6" data-te-ripple-init data-te-ripple-color="light">
                        <span class="text-slate-200">
                            <i class="fa-solid fa-floppy-disk"></i>
                        </span>
                    <span>
                            Update
                        </span>

                </button>
                <div class="inline-flex z-10 bg-gray-200 p-2 text-sm w-8 h-8 rounded-[50%] items-center justify-center leading-normal text-slate-900  transition duration-150 ease-in-out hover:bg-gray-300 focus:outline-none focus:ring-0 " data-te-ripple-init data-te-ripple-color="light">
                    Or
                </div>
                <button type="reset" class="inline-flex rounded-r bg-[#36596ee7] hover:bg-[#36596ee7] text-white focus:text-slate-100 active:text-slate-100  font-medium leading-normal  transition duration-150 ease-in-out focus:bg-[#36596ee7] focus:outline-none focus:ring-0 active:bg-[#2d4b5ee7] ml-[-8px] py-2 px-6" data-te-ripple-init data-te-ripple-color="light">
                    Reset
                </button>

                <a href="{{url('/roles')}}" class="inline-flex ml-4 rounded bg-red-600 hover:bg-red-700 text-white font-medium leading-normal  transition duration-200 ease-in-out py-2 px-6">
                    Cancel
                </a>
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