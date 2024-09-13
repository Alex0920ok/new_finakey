<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="relative">
            <img class="absolute top-0 w-1/2 h-full z-[-1]" src="{{asset('images/webcome_bg.png')}}"/>
            <div class="p-4">
                <h2 class="text-4xl text-black font-bold">Welcome To FINAKEY</h2>
                <img src="{{asset('images/border_bg.png')}}" class="mt-1 w-12"/>
                <div class="grid grid-cols-3 mt-8">
                    <div class="relative">
                        <img src="{{asset('images/welcome_target.png')}}" class="absolute w-full bottom-0"/>
                    </div>
                    <div class="col-span-2">
                        <div class="pl-12 flex">
                            <img src="{{asset('images/welcome_vision.png')}}" class="h-28"/>
                            <div class="ml-8">
                                <h3 class="text-3xl text-app-red font-bold">Our Vision</h3>
                                <p>
                                    Families and businesses can grow and prosper, make a positive impact and leave a lasting legacy.
                                </p>
                            </div>
                        </div>
                        <div class="flex mt-40">
                            <img src="{{asset('images/welcome_mission.png')}}" class="h-28"/>
                            <div class="ml-8">
                                <h3 class="text-3xl text-app-red font-bold">Our Mission</h3>
                                <p>
                                    At FINAKEY, we aim to protect and support for wealthy individuals, entrepreneurs and their families in the ever-evolving environments in which they live and work.
                                </p>
                                <p>
                                    Our independent and unprejudiced approach, together with forward thinking, ensures the wealth preservation and growth from one generation to the next.
                                </p>
                                <p>
                                    We listen to our client’s concerns as they change through time, by remaining focused on delivering the best results and we adapt to meet their needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 p-4">
            <h2 class="text-4xl text-black font-bold">Our Core Values</h2>
            <img src="{{asset('images/border_bg.png')}}" class="mt-1 w-12"/>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="pt-8 pl-8 bg-[url('/public/images/our_core_values_1.png')] bg-cover">
                    <div class="bg-app-blue rounded-tl-[3rem] rounded-bl-xl p-4 h-full">
                        <h3 class="text-white font-bold text-xl border-b border-b-white mr-8 pb-3">01</h3>
                        <h3 class="text-white font-bold text-xl my-4">Confidentiality</h3>
                        <p class="text-white">
                            Switzerland has inherited from a long history of banking secrecy and client confidentiality dating back to the early 1700s. Maintaining strict confidentiality is not only a legal obligation, but also a Swiss tradition that we have lived by for centuries.
                            <br>
                            As a Swiss Family Office, we believe that trust is a cornerstone of the fiduciary relationship, and that confidentiality is essential to fostering and maintaining that trust.
                        </p>
                    </div>
                </div>
                <div class="pt-8 pl-8 bg-[url('/public/images/our_core_values_2.png')] bg-cover">
                    <div class="bg-app-blue rounded-tl-[3rem] rounded-bl-xl p-4 h-full">
                        <h3 class="text-white font-bold text-xl border-b border-b-white mr-8 pb-3">02</h3>
                        <h3 class="text-white font-bold text-xl my-4">Reliability</h3>
                        <p class="text-white">
                            As a Swiss family office with over 40 years of experience, we understand  the importance of reliability in our culture.
                            <br>
                            Our clients trust us to prioritize their needs and provide clear policies, robust systems and infrastructure, ongoing training and development for our staff. We regularly  review and refine our processes to adapt to changing circumstances and industry best practices, ensuring that we maintain our commitment to reliability.
                        </p>
                    </div>
                </div>
                <div class="pt-8 pl-8 bg-[url('/public/images/our_core_values_3.png')] bg-cover">
                    <div class="bg-app-blue rounded-tl-[3rem] rounded-bl-xl p-4 h-full">
                        <h3 class="text-white font-bold text-xl border-b border-b-white mr-8 pb-3">03</h3>
                        <h3 class="text-white font-bold text-xl my-4">Continuity </h3>
                        <p class="text-white">
                            FINAKEY’s mission is to meet the long-term financial and wealth management needs of (ultra) high net worth families and their future generations.  Ensuring continuity is a core value that is essential to fulfilling our primary mission of preserving and growing the family’s wealth across generations.
                            <br>
                            Our long-term commitment, planning and adaptability ensure that the family’s wealth management strategies remain effective and aligned with their values and legacy over time.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 p-4">
            <h2 class="text-4xl text-black font-bold">Our Guiding Principles</h2>
            <img src="{{asset('images/border_bg.png')}}" class="mt-1 w-12"/>
            <div class="grid grid-cols-2 mt-8 gap-32 lg:gap-52 bg-[url('/public/images/principle_bg.png')] bg-center bg-no-repeat">
                <div>
                    <div class="flex">
                        <img src="{{asset('images/principle_integrity.png')}}" class="w-16 h-16">
                        <div class="ml-6">
                            <h3 class="font-bold text-xl">Integrity</h3>
                            <ul class="list-disc list-outside pl-4 ml-4">
                                <li>
                                    We are dedicated to ensuring that FINAKEY provides reliable and ethical services and supports the family’s long-term financial goals, while maintaining its reputation and credibility.
                                </li>
                                <li>
                                    Integrity is one of our guiding principles that influences decision-making , interactions and the overall culture of our organization. It also plays a pivotal role in building and maintaining strong relationships, both within the family office and with external stakeholders.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex mt-8">
                        <img src="{{asset('images/principle_trustworthiness.png')}}" class="w-16 h-16">
                        <div class="ml-6">
                            <h3 class="font-bold text-xl">Trustworthiness</h3>
                            <ul class="list-disc list-outside pl-4 ml-4">
                                <li>
                                    This value holds paramount importance within FINAKEY, due to the sensitive and personal nature of the services we provide to wealthy families and their members.
                                </li>
                                <li>
                                    Building trust within a family office requires a holistic approach that includes clear communication, ethical decision-making and a genuine commitment to the family's interests. It's essential to maintain an open dialogue with family members, establish strong governance structures and continuously demonstrate the office's dedication to its fiduciary responsibilities.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex mt-8">
                        <img src="{{asset('images/principle_excellence.png')}}" class="w-16 h-16">
                        <div class="ml-6">
                            <h3 class="font-bold text-xl">Excellence</h3>
                            <ul class="list-disc list-outside pl-4 ml-4">
                                <li>
                                    Excellence stands as a critical value within FINAKEY, underscoring our commitment to delivering the highest quality of service, expertise and outcomes for the wealthy families and their members.
                                </li>
                                <li>
                                    Our relentless pursuit of excellence across all facets of operations ensures that FINAKEY not only meet, but consistently exceeds expectations. This in turn, contributes to the financial well-being, satisfaction, and peace of mind of the families we serve.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex">
                        <img src="{{asset('images/principle_independence.png')}}" class="w-16 h-16">
                        <div class="ml-6">
                            <h3 class="font-bold text-xl">Independence</h3>
                            <p class="ml-4">
                                Our independence has been firmly rooted since the creation of the group in Switzerland in 1983. It is a fundamental guiding principle within FINAKEY that underscores the importance of unbiased decision-making and safeguarding the interests of the family and its members.
                                <br>
                                This principle ensures that FINAKEY operates without conflicts of interest and provides objective advice and services that are always aligned with the family's goals and values.
                            </p>
                        </div>
                    </div>
                    <div class="flex mt-8">
                        <img src="{{asset('images/principle_long_thinking.png')}}" class="w-16 h-16">
                        <div class="ml-6">
                            <h3 class="font-bold text-xl">Long - term thinking</h3>
                            <p class="ml-4">
                                Long-term thinking is a crucial approach within FINAKEY, as it aligns with the family's goals of preserving wealth, ensuring intergenerational prosperity and maintaining a stable financial legacy.
                                <br>
                                By incorporating long-term thinking, FINAKEY provides a steady and stable environment that guides the family's financial decisions and actions over the years. It ensures that the family's wealth is managed in a way that benefits not only the current generation but also those to come.
                            </p>
                        </div>
                    </div>
                    <div class="flex mt-8">
                        <img src="{{asset('images/principle_partnership.png')}}" class="w-16 h-16">
                        <div class="ml-6">
                            <h3 class="font-bold text-xl">Partnership</h3>
                            <p class="ml-4">
                                At FINAKEY we emphasize the collaborative and cooperative nature of the relationships between our professionals and the family members.
                                <br>
                                By prioritizing partnership as a core value, FINAKEY has created an environment where everyone involved feels valued, heard and empowered. This value fosters a sense of unity and shared responsibility in working towards the family's financial success and overall well-being
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

