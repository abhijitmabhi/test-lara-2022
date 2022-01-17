<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="w-3/3 mx-auto">
    <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Phone</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Age</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Address</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($studentList as $student)

            <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">{{$student->studentId}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$student->fullName}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$student->email}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$student->phone}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$student->age}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$student->address}}</td>
                <td class="py-4 px-6 border-b border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark">Edit</a>
                    <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">View</a>
                </td>
            </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
