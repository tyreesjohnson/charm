<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="w-full z-20 top-0 start-0 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="images/logo-black-256x256.png" class="h-12"/>
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex rounded-full md:me-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
         <img class="w-10 h-10 rounded-full" src="https://www.svgrepo.com/show/382100/female-avatar-girl-face-woman-user-7.svg" alt="$profile_picture;">
      </button>
      <button onclick="reloadPage()">
        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 10 3-3m0 0-3-3m3 3H5v3m3 4-3 3m0 0 3 3m-3-3h14v-3"/>
          </svg>
        </button>
  </div>
  </div>
</nav>

<script>
    function reloadPage() {
        location.reload();
    }
</script>

<style>   
        button {
            background-color:#000;
            padding:8px;
            border-radius:100%;
        }
</style>