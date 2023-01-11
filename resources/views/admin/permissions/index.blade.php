@extends('layouts.master')


@section('content')
<div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Permission</th>
                                <th scope="col" class="relative px-6 py-3"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    {{ $user->id }}
                                </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    {{ $user->name }}
                                </div>
                                </td>
                                <td>
                                <div class="flex justify-end">
                                       <div class="flex space-x-2">
                                        <form action="/admin/permissions" method="post">
                                            @csrf
                                            
                                             <div class="from-group">
                                                    <select name="has_permission" class="form-control">
                                                        <option value="{{$user->has_permission}}">
                                                           {{$user->has_permission == 1  ?  1 :  0}} 
                                                           
                                                        </option>
                                                        <option value="{{!$user->has_permission}}">
                                                            {{!$user->has_permission == 0   ? 0 :   1}}
                                                            
                                                        </option>
                                                    </select>    
                                            </div>
                                            <button>Assign</button>
                                        </form>
                                </td>
                            </tr>  
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
@endsection


