@extends('layouts.app')
@section('title', 'Import Summary')
@section('pageTitle', 'Import Summary')
@section('breadcumb')
    <x-breadcumbs.breadcumb :data="[
        ['title'=>'Employees List', 'url'=>route('employees.index')],
        ['title'=>'Import Employees', 'url'=>route('employees.import')],
        ['title'=>'Import Summary', 'url'=>'']
    ]" class=""></x-breadcumbs.breadcumb>
@endsection
@section('additionalButton')

@endsection

@section('content')
    <x-containers.container-box>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                            <tr>
                                <th scope="col" class="px-2 text-left font-medium">Status</th>
                                @php $colDefs=["Sl No.","ID Number","Name","NID Number","Company","Department","Designation","Joining Date","Cell Number","Emergency Cell Number","Blood Group","Personal Mail Address","Official Mail Address","Gender","Resign Date"]; @endphp
                                @foreach($colDefs as $item)
                                    <th scope="col" class="px-2 text-left font-medium">
                                        {{$item}}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @if(isset($errorRow))
                                @foreach($errorRow as $data)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            <span class="{{$data['status']==0 ? 'bg-red-100 text-red-700' : 'text-teal-700 bg-teal-100'}} font-semibold px-2 py-1 rounded-full text-xs">{{$data['msg']}}</span>
                                        </td>
                                        @foreach($data['data'] as $item)
                                             <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$item}}</td>
                                        @endforeach
                                    </tr>

                                @endforeach

                            @endif



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-containers.container-box>
@endsection
@include('employee.create')
@section('scripts')
    <script>

    </script>
@endsection



