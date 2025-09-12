<section class="mdd:p-5">
    <div class="container  text-primary py-10">
        <div class="flex flex-col lg:flex-row gap-10 p-8 container bg-white rounded-[40px]">

            <div class=" space-y-6">
                <h1 class="text-24  font-normal font-main text-primary">
                    <!-- Link Generator <br>
                    <b>for shareable <span class="text-[#28B53E]">wa.me</span><br>
                        WhatsApp chat</b> -->
                        Create Free <br>
                        <b>WhatsApp QR Codes</b><br>
                         for Instant Chats
                </h1>
                <ul class="text-16 leading-6 ">
                    <li><b>Step 1:</b> Enter required data</li>
                    <li><b>Step 2:</b> Click on 'Generate WhatsApp QR Code'</li>
                    <li><b>Step 3:</b> Copy the generated link and download QR code</li>
                </ul>
            </div>
            <div id="wa_form" class="flex-1">
                <div class="flex gap-6 flex-col md:flex-row">
                    <div class="flex-1 space-y-4">
                        <div class="space-y-4">
                            <p class="text-16 leading-6 text-[#191919]">Your WhatsApp Number</p>
                            <p class="text-[#666666] text-14  font-normal">Include country code without <b>‘+’</b> symbol.
                                Eg. if country code is +91 and WhatsApp number is <b>9876543210</b>, then type <b>919876543210</b> below.</p>
                        </div>
                        <input type="text" id="wa_number" placeholder="Enter WhatsApp Number" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" />
                    </div>
                    <div class="flex-1 space-y-4">
                        <div class="space-y-4">
                            <p class="text-16 text-[#191919] leading-6 ">Welcome Message</p>
                            <p class="text-[#666666] text-14 font-normal">Automatically include this text when a user clicks on your chat link, making it easier to start a conversation.</p>
                        </div>
                        <textarea id="wa_message" placeholder="Eg. Hello there..." class=" rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]"></textarea>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between items-end md:items-center w-full pt-4 md:pt-0 gap-4 md:gap-0">
                    <label class="text-14">
                        <input type="checkbox" id="wa_terms" /> I agree to the <a href="#" class="text-primary font-semibold">Terms & Conditions</a>
                    </label>
                    <a id="wa_generate_btn" class="bg-primary cursor-pointer border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold  py-[10px] px-5 rounded-[20px]"> Generate WhatsApp QR Code</a>
                </div>

            </div>

            <!-- Results -->
            <div id="wa_result" class="hidden">

                <div class="flex gap-4 flex-col md:flex-row">
                    <div class="flex-1 space-y-4">
                        <div class="space-y-4">
                            <p class="text-16 text-[#191919] leading-6 ">Generated Link</p>
                            <p class="text-[#666666] text-14 font-normal">Your unique WhatsApp chat link has been created. Copy the below url and paste in your website chat.</p>
                        </div>
                        <div class="relative">
                            <textarea id="wa_link" readonly class="w-full border p-4 rounded"></textarea>
                            <button id="wa_copy_btn" class=" mt-2 absolute top-4 right-4">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 17H13.5714C15.4649 17 16.9999 15.4649 16.9999 13.5714V7M13 10.3333C13 11.8061 11.8061 13 10.3333 13H3.66667C2.19391 13 1 11.8061 1 10.3333V3.66667C1 2.19391 2.19391 1 3.66667 1H10.3333C11.8061 1 13 2.19391 13 3.66667V10.3333Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <a target="_blank" id="wa_open" class="mt-4 bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                            Open in WhatsApp
                        </a>
                    </div>

                    <div>
                        <div class="flex-1 space-y-4">
                            <div class="space-y-4">
                                <p class="text-16 text-[#191919] leading-6 ">QR Code</p>
                                <p class="text-[#666666] text-14 font-normal">Your chat link also can be available in the below QR code.</p>
                            </div>
                        </div>
                        <div class="flex-1 flex gap-4 items-start mt-4">
                            <img id="wa_qr" class="w-32 h-32 p-1 border rounded-lg border-[#D4E5F7]" />
                            <a id="wa_download_qr" download="whatsapp-qr.png" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">Download&nbsp;PNG</a>
                        </div>
                    </div>
                </div>
                <button id="wa_retry_btn" class="bg-primary cursor-pointer border block w-max border-primary mr-0 ml-auto  text-white text-16 smd:text-14 leading-5 font-semibold  py-[10px] px-5 rounded-[20px]">Try Another</button>

            </div>

        </div>
    </div>
</section>