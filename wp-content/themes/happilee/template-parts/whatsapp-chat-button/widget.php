<section class="mdd:p-5">
    <div class="container  text-primary py-10">
        <div class="flex flex-col  gap-10 p-8 container bg-white rounded-[40px]">
            <div class="flex flex-col gap-4 lg:flex-row">
                <!-- introduction -->
                <div class=" space-y-6">
                    <h1 class="text-24  font-normal font-main text-primary">
                        Generate <br>
                        <b>WhatsApp <span class="text-[#28B53E]">Widget</span></b>
                    </h1>
                    <ul class="text-16 leading-6 ">
                        <li><b>Step 1:</b> Customize the widget style and appearance</li>
                        <li><b>Step 2:</b> Enter required data</li>
                        <li><b>Step 3:</b> Click on <b>“Generate Widget”</b></li>
                        <li><b>Step 4:</b> Copy the generated code snippet to add in your website</li>
                    </ul>
                    <div class="space-y-4">
                        <p class="text-16 text-[#191919] leading-6 ">Preview</p>
                        <p class="text-[#666666] text-14 font-normal">This is the live preview of your customisation.</p>
                    </div>
                    <div id="previewAreawid" class="mb-4">
                        <a id="previewButton" href="#" target="_blank" class="inline-flex items-center px-4 py-2 rounded text-white bg-green-500">
                            <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" class="mr-2" />
                            Chat Now
                        </a>
                    </div>
                </div>

                <div id="chatwidip" class="flex flex-col md:px-8">
                    <div class="flex flex-col lg:flex-row gap-6">
                        <!-- customiser -->
                        <div class="flex-1">
                            <div class="space-y-4">
                                <div class="space-y-4">
                                    <p class="text-16 leading-6 text-[#191919]">Brand Logo</p>
                                    <p class="text-[#666666] text-14  font-normal">Include a link from a CDN. You can upload it to your CMS and paste that link.</b> below.</p>
                                </div>
                                <input type="url" id="brandlogo" placeholder="Enter URL" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" />
                            </div>

                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Brand Title</label>
                                <input type="text" id="brandtitle" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" placeholder="Enter Brand Name">
                            </div>

                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Subtitle</label>
                                <input type="text" id="subtitle" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" placeholder="Eg. Always available">
                            </div>

                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1 ">Greetings Text</label>
                                <textarea id="greetingtext" placeholder="Hi there, How can I help you?" class=" rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]"></textarea>
                            </div>
                        </div>
                        <!-- Whatsapp message -->
                        <div class="flex flex-1 gap-6 flex-col">
                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Header Background Clor</label>


                                <div class="relative w-full">
                                    <!-- Read-only input just for display -->
                                    <input
                                        id="colorDisplayheader"
                                        type="text"
                                        readonly
                                        placeholder="#CA4AFC"
                                        class="w-full pl-3 pr-12 py-2 text-gray-500 border border-blue-100 rounded-md shadow-sm bg-white cursor-default" />

                                    <!-- Hidden but functional color input -->
                                    <input
                                        id="btnColorHeader"
                                        type="color"
                                        value="#CA4AFC"
                                        class="absolute top-1/2 right-2 transform -translate-y-1/2 w-6 h-6 rounded-full cursor-pointer bg-transparent p-0" />
                                </div>

                            </div>
                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Header Text Color Scheme</label>
                                <select id="colorSchemeHeader" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Button Color</label>


                                <div class="relative w-full mb-3">
                                    <!-- Read-only input just for display -->
                                    <input
                                        id="colorDisplayWid"
                                        type="text"
                                        readonly
                                        placeholder="#CA4AFC"
                                        class="w-full pl-3 pr-12 py-2 text-gray-500 border border-blue-100 rounded-md shadow-sm bg-white cursor-default" />

                                    <!-- Hidden but functional color input -->
                                    <input
                                        id="btnColorWid"
                                        type="color"
                                        value="#CA4AFC"
                                        class="absolute top-1/2 right-2 transform -translate-y-1/2 w-6 h-6 rounded-full cursor-pointer bg-transparent p-0" />
                                </div>

                                <div class="mb-3">
                                    <label class="text-[#666666] text-14  font-normal block mb-1">CTA Text</label>
                                    <input type="text" id="ctaText" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" placeholder="eg:Chat Now" value="Chat Now">
                                </div>

                                <div class="mb-3">
                                    <label class="text-[#666666] text-14  font-normal block mb-1">Text & Icon Color Scheme</label>
                                    <select id="colorSchemeWid" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]">
                                        <option value="light">Light</option>
                                        <option value="dark">Dark</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="text-[#666666] text-14  font-normal block mb-1">Button Corner Radius</label>
                                    <input type="number" id="cornerRadiusBtnWid" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" value="24">
                                </div>

                                <div class="text-[#666666] font-normal text-14">
                                    <b>Note:</b> Your WhatsApp Number & Welcome Message are taken from WhatsApp Chat Button Settings.
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between items-end md:items-center w-full pt-4 md:pt-0 gap-4 md:gap-0">
                        <label class="text-14">
                            <input type="checkbox" id="termsWid" /> I agree to the <a href="#" class="text-primary font-semibold">Terms & Conditions</a>
                        </label>
                        <a id="generateBtnWid" class="bg-primary cursor-pointer border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold  py-[10px] px-5 rounded-[20px]">
                            Generate Button</a>
                    </div>
                </div>

                <!-- Output -->
                <div id="chatwidop" class="hidden flex-1">
                    <div class="space-y-4 mb-4">
                        <p class="text-16 text-[#191919] leading-6 ">Generated Widget</p>
                        <p class="text-[#666666] text-14 font-normal">Automatically include this text when a user clicks on your chat link, making it easier to start a conversation.</p>
                    </div>
                    <textarea id="generatedCodeWid" class="w-full border rounded p-2 h-40 text-xs" readonly></textarea>
                    <button id="copyCodeWid" class="bg-transparent border block w-max mb-2 md:mb-0 mt-2 border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">Copy Code</button>
                    <a id="tryanotherWid" class="bg-primary mr-0 ml-auto cursor-pointer border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold  py-[10px] px-5 rounded-[20px]">
                        Try Another</a>
                </div>
            </div>
        </div>
    </div>
</section>