<footer class="relative lg:pb-15 pb-24" id="contact">
    <div class="absolute -top-10 start-1/2 -translate-x-1/2 overflow-hidden">
        <div class="md:w-200 w-92 mx-auto md:px-7.5 px-5">
            <div class="md:flex hidden rounded-2xl p-3 bg-default-900 overflow-hidden">
                <div class="bg-body-bg w-full h-15 overflow-hidden"></div>
            </div>
        </div>
    </div>
    <div class="inner-container-small">
        <div
            class="relative z-10 flex flex-col overflow-hidden gap-20 bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)]">
            <div
                class="absolute z-10 md:h-15 h-12 w-full start-0 end-0 top-0 bg-linear-to-b to-body-bg/0 via-body-bg/65 from-body-bg"></div>
            <div
                class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:start-3.75 start-2 z-10 absolute opacity-40"></div>
            <div
                class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:end-3.75 end-2 z-10 absolute opacity-40"></div>
            <img alt="" class="absolute z-10 -bottom-1.25 w-full h-6 object-cover bg-center"
                 src="{{ asset('images/svg/shape.svg') }}"/>
            <div class="flex flex-col md:gap-7.5 gap-5 md:pt-20 md:pb-12.5 md:px-11.25 pt-12 px-8 pb-10">
                <div class="lg:w-7/10 mx-auto text-center flex flex-col md:gap-7.5 gap-4">
                    <img alt="" class="h-15 w-21.25 mx-auto rounded-4xl border border-default-950"
                         src="{{ asset('images/avatar/ulum-1.jpg') }}"/>
                    <div>
                        <h2 class="md:text-4xl text-[26px]">Get in touch</h2>
                        <p class="text-default-600">Fill out the form, or reach out directly. I'll respond within 24 hours.</p>
                    </div>

                    <div data-fs-success class="hidden p-4 mb-4 text-sm text-green-800 bg-green-50 rounded-lg dark:bg-gray-800 dark:text-green-400 font-medium text-center">
                        Pesan Anda berhasil dikirim! Terima kasih.
                    </div>
                    <div data-fs-error class="hidden p-4 mb-4 text-sm text-red-800 bg-red-50 rounded-lg dark:bg-gray-800 dark:text-red-400 font-medium text-center">
                        Terjadi kesalahan. Silakan periksa kembali data Anda.
                    </div>

                    <form id="contact-form" action="https://formspree.io/f/xvzndaoj" method="POST">
                        <div class="flex flex-col gap-1.25 mb-4">
                            <label class="text-default-600 text-start" for="fullname">Name*</label>
                            <input class="bg-white/50 border-0 rounded-md p-3" data-name="fullname" id="fullname"
                                   maxlength="256" name="name" placeholder="Your full name" required=""
                                   type="text" data-fs-field />
                            <span data-fs-error="name" class="text-red-500 text-xs text-start mt-1"></span>
                        </div>
                        <div class="flex flex-col gap-1.25 mb-4">
                            <label class="text-default-600 text-start" for="email">Email*</label>
                            <input class="bg-white/50 border-0 rounded-md p-3" data-name="Email" id="email"
                                   maxlength="256" name="email" placeholder="Your email address" required=""
                                   type="email" data-fs-field />
                            <span data-fs-error="email" class="text-red-500 text-xs text-start mt-1"></span>
                        </div>
                        <div class="flex flex-col gap-1.25 mb-4">
                            <label class="text-default-600 text-start" for="message">Message</label>
                            <textarea class="bg-white/50 border-0 rounded-md p-3" data-name="Message" id="message"
                                      maxlength="5000" name="message" placeholder="Your message" data-fs-field></textarea>
                            <span data-fs-error="message" class="text-red-500 text-xs text-start mt-1"></span>
                        </div>
                        <button type="submit" data-fs-submit-btn class="py-2.5 px-7.5 rounded-md w-full bg-body-bg text-white text-base disabled:opacity-50 transition-opacity">Submit</button>
                    </form>

                </div>
                <div class="border-t border-default-950 border-dashed"></div>
                <div class="flex flex-col text-center md:gap-4 gap-2.5">
                    <div class="text-default-600">Or, let's discuss</div>
                    <a class="md:text-xl text-base hover:underline" href="https://api.whatsapp.com/send/?phone=6285850018743&text&type=phone_number&app_absent=0">+(62) 858 5001 8743</a>
                    <a class="md:text-[26px] text-xl hover:underline" href="mailto:rullum.id@gmail.com">
                        <h3>rullum.id@gmail.com</h3>
                    </a>
                </div>
                <div class="border-t border-default-950 border-dashed"></div>
                <div class="flex justify-between items-center gap-2.5 flex-wrap">
                    <div>Copyright © 2026 <span class="hover:underline">rullumgrafis</span>. All rights reserved.</div>
                    <div>
                        <img alt="Barcode Image" src="{{ asset('images/svg/barcode.svg') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    window.formspree = window.formspree || function () { (formspree.q = formspree.q || []).push(arguments); };
    formspree('initForm', { formElement: '#contact-form', formId: 'xvzndaoj' });
</script>
<script src="https://unpkg.com/@formspree/ajax@1" defer></script>