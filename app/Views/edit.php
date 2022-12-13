<?= $this->include('tamplate/header') ?>
<main>
    <div class="relative">
      <div class="mx-auto max-w-8xl pt-20 pb-32 sm:pt-48 sm:pb-40">
        <div class="mt-5 flex gap-x-4 sm:justify-around">
            <!-- form -->
            <div class="mt-5 md:col-span-2 md:mt-0 w-96">
                <form action="<?= base_url('product/update/'.$detail['id']); ?>" method="POST">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                      <div class="space-y-6 bg-slate-800 px-4 py-5 sm:p-6">
                            <div>
                                <label for="nama_produk" class="block text-sm font-semibold text-white">Nama Produk</label>
                                <div class="mt-1">
                                    <input type="text" name="nama_produk" id="nama_produk" class="rounded-md text-pink-500 bg-slate-700 w-full border-slate-200 sm:text-sm py-2 pl-3 pr-3 shadow-sm" placeholder="Nama Produk" value="<?= $detail['nama_produk']; ?>">
                                </div>
                                <div class="text-red-300 text-xs mt-2"><?= \Config\Services::validation()->getError('nama_produk') ?></div>
                            </div>
                            <div>
                                <label for="harga" class="block text-sm font-semibold text-white">Harga</label>
                                <div class="mt-1">
                                    <input type="text" name="harga" id="harga" class="rounded-md text-pink-500 bg-slate-700 w-full border-slate-200 sm:text-sm py-2 pl-3 pr-3 shadow-sm" placeholder="Harga" value="<?= $detail['harga']; ?>">
                                </div>
                                <div class="text-red-300 text-xs mt-2"><?= \Config\Services::validation()->getError('harga') ?></div>
                            </div>
                            <!-- button -->
                            <div class="px-0 py-3 text-right sm:px-0">
                                <a href="<?= base_url('product'); ?>" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Cancel</a>

                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                            <!-- end button -->
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->
            <!-- SVG -->
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
            <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
              <defs>
                <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#9089FC"></stop>
                  <stop offset="1" stop-color="#FF80B5"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
          <!-- SVG -->
        </div>
      </div>
    </div>
  </main>
</div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>