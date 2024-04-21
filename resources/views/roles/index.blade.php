@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <div class="m-4">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex items-center justify-between p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="text-lg font-medium">Users table</h6>
                <a href="{{--{{route('roles.create')}}--}}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Add Roles</a>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto ps">
                    @if($roles->count()>0)
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Role Name</th>
                                <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($roles as $item)
                                    <tr>
                                        <td class="p-2 px-6 py-1 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="">
                                                <h6 class="mb-0 text-sm leading-normal">{{$item->name}} <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-0.5 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">{{$item->users_count}}</span></h6>
                                            </div>
                                        </td>
                                        <td class="p-2 py-1 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            @if($item->slug!='super-admin')
                                                <a href="{{route('roles.change-permission', ['id' => $item->id])}}" class="text-xs font-semibold leading-tight text-slate-400"> Change Permission </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                        {{$roles->links()}}
                    @endif

                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
        </div>
    </div>


@endsection
