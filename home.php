<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <title>Individualized Education Planner</title>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="flex flex-col w-56 bg-white rounded-r-3xl overflow-hidden">
            <div class="flex items-center justify-center h-20 shadow-md">
                <h1 class="text-3xl uppercase text-indigo-500">IEP Maker</h1>
            </div>
            <ul class="flex flex-col py-4">
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Home</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex items-center justify-center p-10">
            <div class="bg-white border border-4 rounded-lg shadow-lg p-10 w-11/12 md:w-3/4 lg:w-2/3">
                <h3 class="text-2xl font-semibold mb-6 text-center">Child Information Sheet</h3>
                <form action="" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="student_name" class="text-sm font-medium text-gray-900 block mb-2">Student Name</label>
                            <input type="text" name="student_name" id="student_name" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="date_of_birth" class="text-sm font-medium text-gray-900 block mb-2">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="age" class="text-sm font-medium text-gray-900 block mb-2">Age</label>
                            <input type="number" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="nationality" class="text-sm font-medium text-gray-900 block mb-2">Nationality</label>
                            <input type="text" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="gender" class="text-sm font-medium text-gray-900 block mb-2">Gender</label>
                            <select name="gender" id="gender" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                <option value="" disabled selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="address" class="text-sm font-medium text-gray-900 block mb-2">Address</label>
                            <input type="text" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="tongue" class="text-sm font-medium text-gray-900 block mb-2">Mother Tongue</label>
                            <input type="text" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="lrn" class="text-sm font-medium text-gray-900 block mb-2">Learner's Reference Number</label>
                            <input type="number" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="childplacement" class="text-sm font-medium text-gray-900 block mb-2">Current Child's Placement</label>
                            <input type="text" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>

                        <!-- Parent/Guardian Info Section -->
                        <div class="col-span-3 mt-8">
                            <h4 class="text-xl font-medium text-gray-900 mb-4">Parent/Guardian Information</h4>
                            <hr class="border-gray-300 mb-4">
                        </div>

                        <div>
                            <label for="relationship" class="text-sm font-medium text-gray-900 block mb-2">Relationship to the learner</label>
                            <select name="relation" id="relation" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                <option value="" disabled selected>Select Relationship</option>
                                <option value="Parent">Parent</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="parent_guardian" class="text-sm font-medium text-gray-900 block mb-2">Parent/Guardian's Name</label>
                            <input type="text" name="parent_guardian" id="parent_guardian" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="contact" class="text-sm font-medium text-gray-900 block mb-2">Contact Number</label>
                            <input type="number" name="contact" id="contact" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="income" class="text-sm font-medium text-gray-900 block mb-2">Monthly Income</label>
                            <input type="number" name="income" id="income" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label for="tongue_guardianparent" class="text-sm font-medium text-gray-900 block mb-2">Mother Tongue (Guardian/Parent)</label>
                            <input type="text" name="tongue_guardianparent" id="tongue_guardianparent" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button type="submit" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
