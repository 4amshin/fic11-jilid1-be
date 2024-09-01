<div id="addUserModal" modal-center=""
    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
            <h5 class="text-16">Add User</h5>
            <button data-modal-close="addUserModal"
                class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                    class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <!--Name-->
                <div class="mb-3">
                    <label for="userNameInput" class="inline-block mb-2 text-base font-medium">Name</label>
                    <input type="text" name="name" id="userNameInput"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Enter name" required="">
                </div>

                <!--Phone-->
                <div class="mb-3">
                    <label for="phoneNumberInput" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                    <input type="text" name="phone" id="phoneNumberInput"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Enter Phone Number" required="">
                </div>

                <!--Role-->
                <div class="mb-3">
                    <label for="role" class="inline-block mb-2 text-base font-medium">Role</label>
                    <select class="form-input border-slate-300 focus:outline-none focus:border-custom-500"
                        data-choices="" data-choices-search-false="" name="role" id="role">
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="owner">Owner</option>
                        <option value="pegawai">Pegawai</option>
                    </select>
                </div>

                <!--Email-->
                <div class="mb-3">
                    <label for="emailInput" class="inline-block mb-2 text-base font-medium">Email</label>
                    <input type="email" name="email" id="emailInput"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Enter email" required="">
                </div>

                <!--Password-->
                <div class="mb-3">
                    <label for="passwordInput" class="inline-block mb-2 text-base font-medium">Password</label>
                    <input type="text" name="unhashed_password" id="passwordInput"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Enter password" required="">
                </div>

                <!--Button-->
                <div class="flex justify-end gap-2 mt-4">
                    <button type="reset" data-modal-close="addUserModal"
                        class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500">Cancel</button>
                    <button type="submit"
                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                        User</button>
                </div>
            </form>
        </div>
    </div>
</div>
