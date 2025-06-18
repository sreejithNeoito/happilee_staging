<section class="mdd:p-5">
    <div class="container  text-primary py-10">
        <div class="flex flex-col  gap-10 p-8 container bg-white rounded-[40px]">
            <div class="flex flex-col gap-4 lg:flex-row">
                <!-- introduction -->
                <div class=" space-y-6">
                    <h1 class="text-24  font-normal font-main text-primary">
                        Generate <br>
                        <b>WhatsApp <span class="text-[#28B53E]">Button</span></b>
                    </h1>
                    <ul class="text-16 leading-6 ">
                        <li><b>Step 1:</b> Customize the button style and appearance</li>
                        <li><b>Step 2:</b> Enter required data</li>
                        <li><b>Step 3:</b> Click on <b>“Generate Button”</b></li>
                        <li><b>Step 4:</b> Copy the generated code snippet to add in your website</li>
                    </ul>
                    <div class="space-y-4">
                        <p class="text-16 text-[#191919] leading-6 ">Preview</p>
                        <p class="text-[#666666] text-14 font-normal">This is the live preview of your customisation.</p>
                    </div>
                    <div id="previewArea" class="mb-4">
                        <a id="previewButton" href="#" target="_blank" class="inline-flex items-center px-4 py-2 rounded text-white bg-green-500">
                            <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" class="mr-2" />
                            Chat Now
                        </a>
                    </div>
                </div>

                <div id="chatbtnip" class="flex flex-col md:px-8">
                    <div class="flex flex-col lg:flex-row gap-6">
                        <!-- customiser -->
                        <div class="flex-1">
                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Button Color</label>


                                <div class="relative w-full">
                                    <!-- Read-only input just for display -->
                                    <input
                                        id="colorDisplay"
                                        type="text"
                                        readonly
                                        placeholder="#CA4AFC"
                                        class="w-full pl-3 pr-12 py-2 text-gray-500 border border-blue-100 rounded-md shadow-sm bg-white cursor-default" />

                                    <!-- Hidden but functional color input -->
                                    <input
                                        id="btnColor"
                                        type="color"
                                        value="#CA4AFC"
                                        class="absolute top-1/2 right-2 transform -translate-y-1/2 w-6 h-6 rounded-full cursor-pointer bg-transparent p-0" />
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Button Text</label>
                                <input type="text" id="btnText" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" value="Chat Now">
                            </div>

                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Text & Icon Color Scheme</label>
                                <select id="colorScheme" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="text-[#666666] text-14  font-normal block mb-1">Button Position</label>
                                <label class="text-[#191919] text-16 font-medium"><input class="mr-2  accent-primary" type="radio" name="position" value="left" checked> Left</label>
                                <label class="ml-4 text-[#191919] text-16 font-medium"><input class="mr-2 accent-primary" type="radio" name="position" value="right"> Right</label>
                            </div>

                            <div class="grid grid-cols-2 gap-3 mb-3">
                                <div>
                                    <label class="text-[#666666] text-14  font-normal block mb-1">Margin Left</label>
                                    <input type="number" id="marginLeft" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" value="0">
                                </div>
                                <div>
                                    <label class="text-[#666666] text-14  font-normal block mb-1">Margin Right</label>
                                    <input type="number" id="marginRight" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" value="24">
                                </div>
                                <div>
                                    <label class="text-[#666666] text-14  font-normal block mb-1">Margin Bottom</label>
                                    <input type="number" id="marginBottom" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3] " value="24">
                                </div>
                                <div>
                                    <label class="text-[#666666] text-14  font-normal block mb-1">Corner Radius</label>
                                    <input type="number" id="cornerRadius" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" value="24">
                                </div>
                            </div>


                        </div>
                        <!-- Whatsapp message -->
                        <div class="flex flex-1 gap-6 flex-col">
                            <div class="space-y-4">
                                <div class="space-y-4">
                                    <p class="text-16 leading-6 text-[#191919]">Your WhatsApp Number</p>
                                    <p class="text-[#666666] text-14  font-normal">Include country code without <b>‘+’</b> symbol.
                                        Eg. if country code is +91 and WhatsApp number is <b>9876543210</b>, then type <b>919876543210</b> below.</p>
                                </div>
                                <input type="text" id="whatsappNumber" placeholder="Enter WhatsApp Number" class="rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]" />
                            </div>
                            <div class="space-y-4">
                                <div class="space-y-4">
                                    <p class="text-16 text-[#191919] leading-6 ">Welcome Message</p>
                                    <p class="text-[#666666] text-14 font-normal">Automatically include this text when a user clicks on your chat link, making it easier to start a conversation.</p>
                                </div>
                                <textarea id="welcomeMessage" placeholder="Eg. Hello there..." class=" rounded-lg w-full border px-4 py-3 border-[#D4E5F7] bg-white text-black placeholder-[#b3b3b3]"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between items-end md:items-center w-full pt-4 md:pt-0 gap-4 md:gap-0">
                        <label class="text-14">
                            <input type="checkbox" id="terms" /> I agree to the <a href="#" class="text-primary font-semibold">Terms & Conditions</a>
                        </label>
                        <a id="generateBtn" class="bg-primary cursor-pointer border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold  py-[10px] px-5 rounded-[20px]">
                            Generate Button</a>
                    </div>
                </div>

                <!-- Preview & Output -->
                <div id="chatbtnop" class="hidden flex-1">
                    <div class="space-y-4 mb-4">
                        <p class="text-16 text-[#191919] leading-6 ">Generated Button</p>
                        <p class="text-[#666666] text-14 font-normal">Automatically include this text when a user clicks on your chat link, making it easier to start a conversation.</p>
                    </div>
                    <textarea id="generatedCode" class="w-full border rounded p-2 h-40 text-xs" readonly></textarea>
                    <button id="copyCode" class="bg-transparent border block w-max mb-2 md:mb-0 mt-2 border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">Copy Code</button>
                    <a id="tryanotherchatbtn" class="bg-primary mr-0 ml-auto cursor-pointer border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold  py-[10px] px-5 rounded-[20px]">
                        Try Another</a>
                </div>
            </div>
        </div>
    </div>
</section>