<section
        id="add-product"
        class="section-padding-x pt-24 pb-8 normal-font-size text-light-base bg-dark-base"
>
    <div class="max-w-screen-lg container">
        <h1 class="font-bold title-font-size mb-4">Create a Post</h1>
        <form action="/upload" method="post" enctype="multipart/form-data">
            <div class="flex flex-col gap-4 mb-4">
                <div>
                    <label for="name" class="block mb-2 font-medium"
                    >Title <span class="text-red-600">*</span></label
                    >
                    <input
                            type="text"
                            name="title"
                            id="name"
                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 text-dark-base"
                            placeholder="Enter post name..."
                            required=""
                    />
                </div>
                <div>
                    <label for="name" class="block mb-2 font-medium"
                    >Category <span class="text-red-600">*</span></label
                    >
                    <input
                            type="text"
                            name="category"
                            id="name"
                            class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 text-dark-base"
                            placeholder="Enter post category..."
                            required=""
                    />
                </div>
                <div class="sm:col-span-2">
                    <label
                            for="description"
                            class="block mb-2 font-medium">Description <span class="text-red-600">*</span></label
                    >
                    <textarea
                            id="description"
                            rows="4"
                            name="content"
                            class="block p-2.5 w-full bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 text-dark-base"
                            placeholder="Write the post description..."></textarea>
                </div>
                <div class="flex items-center justify-center w-full sm:col-span-2">
                    <label
                            for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50"
                    >
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg
                                    class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 20 16"
                            >
                                <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                                ></path>
                            </svg>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <span class="font-semibold">Click to upload</span> or drag and
                                drop <span class="text-red-600">*</span>
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                SVG, PNG, JPG, or GIF (MAX. 800x400px)
                            </p>
                        </div>
                        <input id="dropzone-file" type="file" name="images[]" class="hidden" multiple/>
                    </label>
                </div>
            </div>
            <button
                    type="submit"
                    class="text-light-base bg-purple-base inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg px-5 py-2.5 text-center"
            >
                <svg
                        class="mr-1 -ml-1 w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                            fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                </svg
                >
                Add Post
            </button>
        </form>
    </div>
</section>
