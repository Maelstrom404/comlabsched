@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')
    <div class="flex flex-row">

        <div class=" flex">
            <x-nav-bar />
            <!--  -->
        </div>

        <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full h-screen items-center flex   ">
            <x-topbar />
            <!-- main content goes here -->
            <div class="flex flex-col justify-center  w-11/12 h-85p pb-8 pt-4 pl-4 pr-4 my-8 bg-white  shadow shadow-black  rounded-lg ">
                <div class="">
                     

                    <a href="{{ url('/faculty/create') }}" class="btn btn-success btn-sm flex justify-center items-center  border ml-8 mt-8 rounded-md  border-black w-28 h-10"
                            title="Add New Faculty">
                            <span class="text-lg">Add Faculty</span>
                    </a>
                </div>
                <div class="row bg-white  shadow shadow-black w-11/12 h-full rounded-lg  overflow-x-auto ml-14 mt-10">

                    <div class="table-responsive flex justify-center items-center   ">
                        <table id="tableko" class=" w-full  rounded-lg  border-spacing-3  p-10 font-semibold">
                            <thead class="">
                                <tr class="h-12 bg-yellow-500">
                                    <th class="">#</th>
                                    <th class="">Name</th>
                                    <th class="">Email</th>
                                    <th class="">Password</th>
                                    <th class="">Role</th>
                                    <th class="">Tag Id</th>
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody class=" ">
                                @foreach ($faculties as $item)
                                    <tr class="h-12 ">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->name }}</td>
                                        <td class="text-center">{{ $item->email }}</td>
                                        <td class="text-center">{{ $item->password }}</td>
                                        <td class="text-center">{{ $item->role }}</td>
                                        <td class="text-center">{{ $item->tag_id }}</td>
                                        <td class="text-center">

                                            <a href="{{ url('/faculty/' . $item->id . '/edit') }}"
                                                title="Edit Student">
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    Edit
                                                </button></a>

                                            <form method="POST" action="{{ url('/faculty/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Delete Student"
                                                    onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>


                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


<!--  -->
<!--  -->


<!-- main content ends here -->
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('tableko');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                if (i % 2 === 0) {
                    rows[i].classList.add('bg-reddishyellow');
                    rows[i+1].classList.add('bg-white');
                } else {
                    rows[i].classList.remove('bg-reddishyellow');
                    rows[i+1].classList.remove('bg-white');
                }
            }
        });
    </script>
@endsection
