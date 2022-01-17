<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<form action="{{ url('/') }}" method="POST">
    @csrf
<div class="bg-white shadow rounded-lg p-6">
    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="studentId" class="bg-white text-gray-600 px-1">Student Id *</label>
                </p>
            </div>
            <p>
                <input id="studentId" name="studentId" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
            </p>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="fullName"  class="bg-white text-gray-600 px-1">Full Name</label>
                </p>
            </div>
            <p>
                <input id="fullName" name="fullName" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="email" class="bg-white text-gray-600 px-1">Email</label>
                </p>
            </div>
            <p>
                <input id="email" name="email" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="phone" class="bg-white text-gray-600 px-1">Phone</label>
                </p>
            </div>
            <p>
                <input id="phone" name="phone" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="age" class="bg-white text-gray-600 px-1">Age</label>
                </p>
            </div>
            <p>
                <input id="age" name="age" autocomplete="false" tabindex="0" type="number" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="address" class="bg-white text-gray-600 px-1">Address</label>
                </p>
            </div>
            <p>
                <input id="address" name="address" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>
    </div>
    <div class="border-t mt-6 pt-3">
        <button type="submit" class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
            Save
        </button>
    </div>
</div>
</form>
