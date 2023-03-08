<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone Name</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($data as $item)--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">{{$loop->iteration}}</th>--}}
{{--                                    <td>{{$item->name}}</td>--}}
{{--                                    <td>{{$item->phone->name}}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Comments</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($post as $item)--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">{{$loop->iteration}}</th>--}}
{{--                                    <td>{{$item->title}}</td>--}}
{{--                                    <td>--}}
{{--                                        @foreach($item->comments as $comment)--}}
{{--                                            <li>--}}
{{--                                                {{$comment->messange}}--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
