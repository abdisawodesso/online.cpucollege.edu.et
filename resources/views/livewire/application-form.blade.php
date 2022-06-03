<div class="p-3">
    <div class="mx-2 p-2">
        <div class="flex items-center">
            {{-- Personal --}}
            <div class="flex items-center text-teal-600 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-10 w-10 py-3 border-2 border-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-bookmark ">
                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">
                    Personal</div>
            </div>
            <div
                class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $currentStep != 1 ? 'border-gray-300' : 'border-teal-600' }}">
            </div>
            {{-- Address --}}
            <div class="flex items-center text-white relative">
                <div
                    class="rounded-full transition duration-500 ease-in-out h-10 w-10 py-3 border-2 bg-teal-600 border-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user-plus ">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">
                    Address</div>
            </div>
            <div
                class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $currentStep != 2 ? 'border-gray-300' : 'border-teal-600' }}">
            </div>
            {{-- Enrollment --}}
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-10 w-10 py-3 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail ">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                        </path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                    Enrollment</div>
            </div>
            <div
                class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $currentStep != 3 ? 'border-gray-300' : 'border-teal-600' }}">
            </div>
            {{-- Enrollment --}}
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-10 w-10 py-3 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail ">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                        </path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                    Enrollment</div>
            </div>
            <div
                class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $currentStep != 4 ? 'border-gray-300' : 'border-teal-600' }}">
            </div>
            {{-- Documents --}}
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-10 w-10 py-3 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail ">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                        </path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                    Enrollment</div>
            </div>
            <div
                class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $currentStep != 5 ? 'border-gray-300' : 'border-teal-600' }}">
            </div>
            {{-- Confirm --}}
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-10 w-10 py-3 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-database ">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                    Confirm</div>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 {{ $currentStep != 1 ? 'hidden' : '' }}">
        <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">Full
            Name</div>
        <div class="flex flex-col md:flex-row">
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="firstName" wire:model="firstName" placeholder="First Name"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">

                </div>
                @error('firstName')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="middleName" wire:model="middleName" placeholder="Middle Name"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
                @error('middleName')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div name="lastName" wire:model="lastName"
                    class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input placeholder="Last Name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
                @error('lastName')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Date of Birth</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="dateOfBirth" wire:model="dateOfBirth" style="border: none" type="date"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
                @error('dateOfBirth')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Sex</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <select name="sex" wire:model="sex" style="border: none"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                        <option value="">Select one</option>
                        <option>Female</option>
                        <option>Male</option>
                    </select>
                </div>
                @error('sex')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex p-2 mt-4">
            <div class="flex-auto flex flex-row-reverse">
                <button type="button" wire:click="firstStepSubmit"
                    class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-600 bg-teal-600 text-teal-100 border duration-200 ease-in-outborder-teal-600 transition">Next</button>
                <button type="button"
                    class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-200 bg-teal-100 text-teal-700 border duration-200 ease-in-out border-teal-600 transition">Skip</button>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 {{ $currentStep != 2 ? 'hidden' : '' }}">
        <div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full flex-1 mx-2 svelte-1l8159u">
                    <div class="font-bold text-gray-600 text-xs leading-8 uppercase">Country</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input name="country" wire:model="country" placeholder="Country"
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                    </div>
                    @error('country')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="w-full flex-1 mx-2 svelte-1l8159u">
                    <div class="font-bold text-gray-600 text-xs leading-8 uppercase">State</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input name="state" wire:model="state" placeholder="State"
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                    </div>
                    @error('state')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="w-full flex-1 mx-2 svelte-1l8159u">
                    <div class="font-bold text-gray-600 text-xs leading-8 uppercase">City</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input name="city" wire:model="city" placeholder="City"
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                    </div>
                    @error('city')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                        Mobile</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input name="mobile" wire:model="mobile" placeholder="+251912345678"
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="tel"
                            style="border: none">
                    </div>
                    @error('mobile')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                        Your Email</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input name="email" wire:model="email" placeholder="abdi@smart.com"
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="email"
                            style="border: none">
                    </div>
                    @error('email')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex p-2 mt-4">
            <button type="button" wire:click="back(1)"
                class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-gray-200 bg-gray-100text-gray-700 border duration-200 ease-in-outborder-gray-600 transition">Previous</button>
            <div class="flex-auto flex flex-row-reverse">
                <button type="button" wire:click="secondStepSubmit"
                    class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-600 bg-teal-600 text-teal-100 border duration-200 ease-in-outborder-teal-600 transition">Next</button>
                <button type="button"
                    class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-200 bg-teal-100 text-teal-700 border duration-200 ease-in-out border-teal-600 transition">Skip</button>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 {{ $currentStep != 3 ? 'hidden' : '' }}">
        <div class="flex flex-col md:flex-row">
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Current Education Level</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <select name="currentEducationLevel" wire:model="currentEducationLevel" style="border: none"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                        <option>Select one</option>
                        <option>Degree</option>
                        <option>Masters</option>
                    </select>
                </div>
                @error('currentEducationLevel')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Current Department</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <select name="currentDepartment" wire:model="currentDepartment" style="border: none"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                        <option>Select one</option>
                        @foreach ($currentDepartments as $currentDepartment)
                            <option>{{ $currentDepartment }}</option>
                        @endforeach
                    </select>
                </div>
                @error('currentDepartment')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    From Institution</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="fromInstitution" wire:model="fromInstitution" style="border: none" type="text"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
                @error('fromInstitution')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Apply for Program</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <select name="applyingForProgram" wire:model="applyingForProgram" style="border: none"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                        <option selected value="">Select one</option>
                        @foreach ($applyingForPrograms as $program)
                            <option>{{ $program }}</option>
                        @endforeach
                    </select>
                </div>
                @error('applyingForProgram')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Apply for Department</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <select name="applyingForDepartment" wire:model="applyingForDepartment" style="border: none"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                        <option selected value="">Select one</option>
                        @foreach ($applyingForDepartments as $applyingForDepartment)
                            <option>{{ $applyingForDepartment }}</option>
                        @endforeach
                    </select>
                </div>
                @error('applyingForDepartment')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Apply for Modality</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <select name="applyingForModality" wire:model="applyingForModality" style="border: none"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                        <option selected value="">Select one</option>
                        @foreach ($applyingForModalitys as $applyingForModality)
                            <option>{{ $applyingForModality }}</option>
                        @endforeach
                    </select>
                </div>
                @error('applyingForModality')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex p-2 mt-4">
            <button type="button" wire:click="back(2)"
                class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-gray-200 bg-gray-100text-gray-700 border duration-200 ease-in-outborder-gray-600 transition">Previous</button>
            <div class="flex-auto flex flex-row-reverse">
                <button type="button" wire:click="thirdStepSubmit"
                    class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-600 bg-teal-600 text-teal-100 border duration-200 ease-in-outborder-teal-600 transition">Next</button>
                <button type="button"
                    class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-200 bg-teal-100 text-teal-700 border duration-200 ease-in-out border-teal-600 transition">Skip</button>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 {{ $currentStep != 4 ? 'hidden' : '' }}">
        <div class="flex flex-col md:flex-row">
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div class="font-bold text-gray-600 text-xs leading-8 uppercase">Under Graduate Degree</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="udDegreeFile" wire:model="udDegreeFile"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="file">
                </div>
                @error('udDegreeFile')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div class="font-bold text-gray-600 text-xs leading-8 uppercase">Under Graduate Degree Transcript</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="udTranscriptFile" wire:model="udTranscriptFile"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="file">
                </div>
                @error('udTranscriptFile')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div class="font-bold text-gray-600 text-xs leading-8 uppercase">High School Transcript</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="hsTranscriptFile" wire:model="hsTranscriptFile" placeholder="Last Name"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="file">
                </div>
                @error('hsTranscriptFile')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                    Renewed Id card/Passport</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="idCardFilePath" wire:model="idCardFilePath"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="file">
                </div>
                @error('idCardFile')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Passport Size Photo</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input name="photoFile" wire:model="photoFile"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800" type="file">
                </div>
                @error('photoFile')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex p-2 mt-4">
            <button type="button" wire:click="back(3)"
                class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-gray-200 bg-gray-100text-gray-700 border duration-200 ease-in-outborder-gray-600 transition">Previous</button>
            <div class="flex-auto flex flex-row-reverse">
                <button type="button" wire:click="fourthStepSubmit"
                    class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-600 bg-teal-600 text-teal-100 border duration-200 ease-in-outborder-teal-600 transition">Next</button>
                <button type="button"
                    class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-200 bg-teal-100 text-teal-700 border duration-200 ease-in-out border-teal-600 transition">Skip</button>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4 {{ $currentStep != 5 ? 'hidden' : '' }}">
        <div class="flex flex-col md:flex-row">
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div class="font-bold text-gray-600 text-xs leading-8 uppercase">why do you choose us?</div>
                <div x-data="{ count: 0 }" x-init="count = $refs.countme.value.length"
                    class="bg-white my-2 p-2 flex-2 border border-gray-200 rounded svelte-1l8159u">
                    <textarea maxlength="280" x-ref="reason" x-on:keyup="count = $refs.reason.value.length" name="reason"
                        wire:model="reason" placeholder="Your reason..."
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800" rows="4"
                        style="border: none"></textarea>
                    <br>
                    <p>
                        <span x-html="count"></span> / <span x-html="$refs.reason.maxLength"></span>
                    </p>
                    @error('reason')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
                </div>
            </div>
            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                <div class="font-bold text-gray-600 text-xs leading-8 uppercase">Agreement</div>
                <div class="bg-white my-2 p-1 flex-2 border border-gray-200 rounded svelte-1l8159u">
                    <p class="text-base font-light leading-relaxed mt-0 mb-0 m-2 text-gray-800">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, libero iste quod quibusdam
                        maxime recusandae odit eveniet, aspernatur culpa provident error molestiae vitae corporis in
                        vero est! Beatae, ipsum voluptatibus.
                    </p>
                    <footer class="block text-gray-600">
                        <div class="form-check m-2">
                            <input name="agree" wire:model="agree"
                                class="form-check-input appearance-none h-4 w-4 border 
                                    border-gray-300 rounded-sm bg-white checked:bg-blue-600 
                                    checked:border-blue-600 focus:outline-none transition 
                                    duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain 
                                    float-left mr-2 cursor-pointer"
                                type="checkbox">

                            <label class="form-check-label inline-block text-gray-800" for="agree">
                                I agree to the terms
                            </label>
                            @error('agree')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <div class="flex p-2 mt-4">
            <button type="button" wire:click="back(4)"
                class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-gray-200 bg-gray-100text-gray-700 border duration-200 ease-in-outborder-gray-600 transition">Previous</button>
            <div class="flex-auto flex flex-row-reverse">
                <button type="button" wire:click="submitForm"
                    class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-600 bg-teal-600 text-teal-100 border duration-200 ease-in-outborder-teal-600 transition">Submit</button>
                <button type="button"
                    class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-200 bg-teal-100 text-teal-700 border duration-200 ease-in-out border-teal-600 transition">Skip</button>
            </div>
        </div>
    </div>
</div>
