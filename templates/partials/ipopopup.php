
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity backdrop-filter backdrop-blur-md" aria-hidden="true"></div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <!-- Heroicon name: outline/exclamation -->
            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
            Disclaimer
            </h3>
            <div class="mt-2">
              <p class="text-sm text-gray-700">
              Informationen på denna del av SaveLend Groups webbplats är begränsad och får inte, direkt eller indirekt, helt eller delvis, offentliggöras, publiceras eller distribueras inom eller till USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore, Sydafrika eller någon annan jurisdiktion där sådant offentliggörande, publicering eller distribution skulle vara olaglig eller kräva ytterligare registrering eller andra åtgärder än vad som krävs enligt svensk lag.
              </p>

              <label class="font-bold mb-2 uppercase">Ange det land du är bosatt i:</label>
              <select class="w-full mb-8">
                <option value="">Sverige</option>
                <option value="">USA</option>
                <option value="">Australien </option>
                <option value="">Hongkong</option>
                <option value="">Japan </option>
                <option value="">Kanada</option>
                <option value="">Nya Zeeland </option>
                <option value="">Singapore</option>
                <option value="">Sydafrika</option>
                <option value="">Övriga länder</option>
              </select>

              <label class="font-bold mb-2 uppercase">Ange det land du befinner dig i:</label>
              <select class="w-full mb-8">
                <option value="">Sverige</option>
                <option value="">USA</option>
                <option value="">Australien </option>
                <option value="">Hongkong</option>
                <option value="">Japan </option>
                <option value="">Kanada</option>
                <option value="">Nya Zeeland </option>
                <option value="">Singapore</option>
                <option value="">Sydafrika</option>
                <option value="">Övriga länder</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
          Fortsätt
        </button>
        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Avbryt
        </button>
      </div>
    </div>
  </div>
</div>