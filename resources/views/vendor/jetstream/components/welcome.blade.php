<!-- <div class="">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow sm:rounded-xl sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-md font-medium text-gray-700">Title</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-md border-gray-300 rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-md font-medium text-gray-700">Category</label>
                <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-md">
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Mexico</option>
                </select>
              </div>
              <div class="col-span-3 sm:col-span-2">
                <label for="company_website" class="block text-md font-medium text-gray-700">
                  Link
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-md">
                    http://
                  </span>
                  <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-md border-gray-300" placeholder="www.example.com">
                </div>
              </div>
            </div>

            <div>
              <label for="about" class="block text-md font-medium text-gray-700">
                Description
              </label>
              <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-md border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
              </div>
              <p class="mt-2 text-md text-gray-500">
                Brief description for your profile. URLs are hyperlinked.
              </p>
            </div>

            <div>
              <label class="block text-md font-medium text-gray-700">
                Cover photo
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-md text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-md font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> -->
<div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 md:gap-10 grid-cols-2 gap-6">

<div class="overflow-hidden rounded-lg h-90 w-60 md:w-80">
    <div class="grid justify-items-center md:m-28 m-18">
        <a href="#" class="rounded-full shadow h-24 w-24 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </a>
    </div>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer">
    <a href="#" class="w-full block h-full">
        <img alt="blog photo" src="/assets/img/about-img.svg" class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium">
                Article
            </p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Supercharged
            </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                The new supercar is here, 543 cv and 140 000$. This is best racing GT about 7 years on...
            </p>
        </div>
    </a>
</div>
</div>