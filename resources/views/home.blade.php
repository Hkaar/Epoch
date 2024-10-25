@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex md:container mx-auto my-4">
        {{-- sidenavbar --}}
        <div class="first w-20 md:w-auto">
            <div class="sidebar flex md:items-end  flex-col sticky top-0">
                <x-side-navbar></x-side-navbar>
            </div>
        </div>
        <div class="second w-full border-[1px] border-x-gray-600 border-y-black ">
            <div class="top flex  sticky top-0 bg-black/40 backdrop-blur-xl ">
                <div class="absolute w-16 h-1 rounded-full bg-blue-500 bottom-0 left-[19%] z-10"></div>
                <a href="#"
                    class="left p-3 hover:bg-white/15 w-full text-center font-var-bold text-lg transition-all ease-in-out duration-150 underline-link">For
                    You</a>
                <a href="#"
                    class="right p-3 hover:bg-white/15 w-full text-center text-gray-400 font-var-medium text-lg transition-all ease-in-out duration-150">Following</a>
            </div>
            <div class="h-[1px] w-full bg-gray-700"></div>
            <div class="whatishapp flex gap-4 my-3">
                <div class="img m-2 w-16">
                    <img class="rounded-full" src="https://i.pinimg.com/564x/b1/e1/25/b1e125190d9cf4b4c57e08ca25c095d7.jpg"
                        alt="">
                </div>
                <div class="w-full">
                    <input class="w-full h-7 my-2 text-xl bg-black outline-none text-white" type="text"
                        placeholder="What is happening?!">
                    <div class="text-blue-400 flex items-center gap-1 w-full my-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-earth">
                                <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
                                <path
                                    d="M7 3.34V5a3 3 0 0 0 3 3a2 2 0 0 1 2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2c0-1.1.9-2 2-2h3.17" />
                                <path d="M11 21.95V18a2 2 0 0 0-2-2a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                        </span>
                        <span class="font-bold">Everyone can reply</span>
                    </div>
                    <div class="w-[90%] h-[0.2px] bg-gray-700 my-3"></div>
                    <div class="flex justify-between">

                        <div class="blueicons flex gap-2 text-blue-400 items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-image">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                                    <circle cx="9" cy="9" r="2" />
                                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                                </svg>
                            </span>
                            <span class="material-symbols-outlined cursor-pointer">
                                gif
                            </span>
                            <span class="material-symbols-outlined cursor-pointer">
                                ballot
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-smile-plus">
                                    <path d="M22 11v1a10 10 0 1 1-9-10" />
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                                    <line x1="9" x2="9.01" y1="9" y2="9" />
                                    <line x1="15" x2="15.01" y1="9" y2="9" />
                                    <path d="M16 5h6" />
                                    <path d="M19 2v6" />
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-calendar-clock">
                                    <path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5" />
                                    <path d="M16 2v4" />
                                    <path d="M8 2v4" />
                                    <path d="M3 10h5" />
                                    <path d="M17.5 17.5 16 16.3V14" />
                                    <circle cx="16" cy="16" r="6" />
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </span>
                        </div>
                        <div class="postbtn">
                            <button
                                class="bg-twitter px-6 mx-5 text-sm rounded-full py-2 text-white font-bold">Post</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="posts">
                <div class="post border-[1px] border-y-gray-600 border-x-0  ">
                    <div class="flex">
                        <div class="image m-4">
                            <img class="w-32 md:w-16 rounded-full"
                                src="https://i.pinimg.com/564x/b1/e1/25/b1e125190d9cf4b4c57e08ca25c095d7.jpg"
                                alt="profile-picture">
                        </div>
                        <div class="content my-3">
                            <a href="#" class="font-bold hover:underline cursor-pointer text-white">Elon Musk</a>
                            <span class="text-gray-500">@ElonMusk · 6h </span>
                            <div class="postimg m-2 ml-0"> I spent $44 billion for this app and now Lizard boy just
                                decided to hit copy and paste.

                                It's personal now.

                                See you in the cage, Zuck.
                            </div>
                            <x-reaction-button></x-reaction-button>
                        </div>
                    </div>

                </div>
                <div class="post">
                    <div class="flex">
                        <div class="image m-4">
                            <img class="w-32 md:w-16 rounded-full"
                                src="https://i.pinimg.com/564x/b1/e1/25/b1e125190d9cf4b4c57e08ca25c095d7.jpg"
                                alt="">
                        </div>
                        <div class="content my-3">
                            <a href="#" class="font-bold hover:underline cursor-pointer text-white">Apell</a>
                            <span class="text-gray-500">@CodeWithApell · 6h </span>
                            <div>xixixi</div>
                            <div class="postimg m-4 ml-0">
                                <img class="rounded-xl"
                                    src="https://i.pinimg.com/736x/22/ca/03/22ca03ec82583f806a7d645d77789b16.jpg"
                                    alt="content">
                            </div>
                            <x-reaction-button></x-reaction-button>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="flex">
                        <div class="image m-4">
                            <img class="w-10 md:w-8 rounded-full"
                                src="https://i.pinimg.com/736x/22/ca/03/22ca03ec82583f806a7d645d77789b16.jpg"
                                alt="profile-picture">
                        </div>
                        <div class="content my-3">
                            <a href="#" class="font-bold hover:underline cursor-pointer text-white">
                                non aesthetic things
                            </a>
                            <span class="text-gray-500">@CodeMeme · 6h </span>
                            <div>This is amazing coding meme</div>
                            <div class="postimg m-4 ml-0">
                                <img class="rounded-xl w-full"
                                    src="https://s3.amazonaws.com/rails-camp-tutorials/blog/programming+memes/works-doesnt-work.jpg"
                                    alt="">
                            </div>
                            <x-reaction-button></x-reaction-button>
                        </div>
                    </div>

                </div>
                <div class="post">
                    <div class="flex">
                        <div class="image m-4">
                            <img class="w-32 lg:w-12 rounded-full"
                                src="https://i.pinimg.com/736x/22/ca/03/22ca03ec82583f806a7d645d77789b16.jpg"
                                alt="profile-picture">
                        </div>
                        <div class="content my-3">
                            <a href="#" class="font-bold hover:underline cursor-pointer text-white"> non aesthetic
                                things</a>
                            <span class="text-gray-500">@PicturesFoIder · 6h </span>
                            <div>cute</div>
                            <div class="postimg m-4 ml-0">
                                <img class="rounded-xl"
                                    src="https://i.pinimg.com/474x/2b/fa/b1/2bfab179b8fa495edfa9194d00e3bfb1.jpg"
                                    alt="content">
                            </div>
                            <x-reaction-button></x-reaction-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="third hidden md:block">
            <div class="sticky top-0">
                <!-- Form Pencarian -->
                <form action="#" class="sticky top-0 bg-black p-1">
                    <div class="search mx-3">
                        <input type="text"
                            class="w-full rounded-full bg-[#16181c] px-6 py-3 text-white focus:outline-none focus:border-twitter focus:ring-1 focus:ring-twitter"
                            placeholder="Search" />
                    </div>
                </form>

                <!-- Trends for You -->
                <div class="trends m-3 space-y-3 rounded-xl py-5 border border-white/20">
                    <h1 class="px-3 text-2xl font-var-bold">Trends for you</h1>
                    <div class="item p-3">
                        <a href="#">
                            <div class="flex justify-between items-center">
                                <div class="space-y-1">
                                    <h5 class="font-var-semibold text-lg">JSHT</h5>
                                    <span class="text-sm font-var-light text-gray-200">40.2k Posts</span>
                                </div>
                                <span class="text-zinc-500 hover:bg-blue-500/20 rounded-full p-2 hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="item p-3">
                        <a href="#">
                            <div class="flex justify-between items-center">
                                <div class="space-y-1">
                                    <h5 class="font-var-semibold text-lg">Laravel</h5>
                                    <span class="text-sm font-var-light text-gray-200">10.2k Posts</span>
                                </div>
                                <span class="text-zinc-500 hover:bg-blue-500/20 rounded-full p-2 hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="item p-3">
                        <a href="#">
                            <div class="flex justify-between items-center">
                                <div class="space-y-1">
                                    <h5 class="font-var-semibold text-lg">fufufafa</h5>
                                    <span class="text-sm font-var-light text-gray-200">10k Posts</span>
                                </div>
                                <span class="text-zinc-500 hover:bg-blue-500/20 rounded-full p-2 hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="item p-3">
                        <a href="#">
                            <div class="flex justify-between items-center">
                                <div class="space-y-1">
                                    <h5 class="font-var-semibold text-lg">PHPVSJS</h5>
                                    <span class="text-sm font-var-light text-gray-200">30k Posts</span>
                                </div>
                                <span class="text-zinc-500 hover:bg-blue-500/20 rounded-full p-2 hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="19" cy="12" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Who to Follow -->
                <div class="who m-3 space-y-1 rounded-xl py-5 border border-white/20">
                    <h1 class="px-3 text-2xl font-bold">Who to follow</h1>
                    <div class="item flex items-center justify-between gap-2 p-3">
                        <a href="#" class="flex gap-3">
                            <div class="p1">
                                <img class="h-12 w-12 rounded-full"
                                    src="https://i.pinimg.com/564x/f3/cf/44/f3cf443fd0673e5c78e52b1c6028eb76.jpg"
                                    alt="vercel" />
                            </div>
                            <div class="p2">
                                <h4 class="font-var-semibold text-lg">Vercel</h4>
                                <span class="text-gray-500">@vercel</span>
                            </div>
                        </a>
                        <div class="p3">
                            <button
                                class="rounded-full bg-white hover:bg-white/90 px-5 py-2 font-bold text-black">Follow</button>
                        </div>
                    </div>
                    <div class="item flex items-center justify-between gap-2 p-3">
                        <a href="#" class="flex gap-3">
                            <div class="p1">
                                <img class="h-12 w-12 rounded-full"
                                    src="https://i.pinimg.com/564x/f3/cf/44/f3cf443fd0673e5c78e52b1c6028eb76.jpg"
                                    alt="vercel" />
                            </div>
                            <div class="p2">
                                <h4 class="font-var-semibold text-lg">Vercel</h4>
                                <span class="text-gray-500">@vercel</span>
                            </div>
                        </a>
                        <div class="p3">
                            <button
                                class="rounded-full bg-white hover:bg-white/90 px-5 py-2 font-bold text-black">Follow</button>
                        </div>
                    </div>
                    <div class="item flex items-center justify-between gap-2 p-3">
                        <a href="#" class="flex gap-3">
                            <div class="p1">
                                <img class="h-12 w-12 rounded-full"
                                    src="https://i.pinimg.com/564x/f3/cf/44/f3cf443fd0673e5c78e52b1c6028eb76.jpg"
                                    alt="vercel" />
                            </div>
                            <div class="p2">
                                <h4 class="font-var-semibold text-lg">Vercel</h4>
                                <span class="text-gray-500">@vercel</span>
                            </div>
                        </a>
                        <div class="p3">
                            <button
                                class="rounded-full bg-white hover:bg-white/90 px-5 py-2 font-bold text-black">Follow</button>
                        </div>
                    </div>
                    <a href="#" class="my-5 cursor-pointer px-3 text-twitter">Show More</a>
                </div>

                <!-- Terms -->
                <div class="terms m-3 space-y-1 px-3 py-5 text-xs text-gray-500">
                    <a href="#" class="text-sm mr-2 cursor-pointer hover:underline transition-all ease-linear">Terms
                        of Service</a>
                    <a href="#"
                        class="text-sm mr-2 cursor-pointer hover:underline transition-all ease-linear">Privacy Policy</a>
                    <a href="#"
                        class="text-sm mr-2 cursor-pointer hover:underline transition-all ease-linear">Cookie Policy</a>
                    <a href="#"
                        class="text-sm mr-2 cursor-pointer hover:underline transition-all ease-linear">Accessibility</a>
                    <a href="#" class="text-sm mr-2 cursor-pointer hover:underline transition-all ease-linear">Ads
                        info</a>
                    <a href="#" class="text-sm mr-2 cursor-pointer hover:underline transition-all ease-linear">More
                        ...</a>
                    <a href="#"
                        class="text-sm mr-2 cursor-pointer hover:underline transition-all ease-linear">&copy; 2024 X
                        Corp.</a>
                </div>
            </div>
        </div>
    @endsection