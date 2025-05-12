<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Edubost - University and College HTML Template')</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="images/x-icon" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- css include -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/recoleta-font.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen">
    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- Preloader - Start -->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/img/logo/preloader.png') }}" alt="preloader"></div>
            </div>
        </div>
    </div>
    <!-- Preloader - End -->

    <div class="body_wrap">
        <!-- header start -->
    <header id="xb-header-area" class="header-area is-sticky">
        <div class="header-top_wrap">
        <div class="container">
          <div class="header-top ul_li_between">
              <div class="xb-help_desk">
                  <img src="{{ asset('assets/img/icon/hero_top-icon.png') }}" alt="">
                  <p>Help Desk : <span>+1 (415) 555‑0132</span></p>
              </div>
              <div class="xb-info">
                  <ul class="ul_li align-items-end">
                      <li>Information For :</li>
                      <li><a href="#!">Students</a></li>
                      <li><a href="#!">Faculty</a></li>
                      <li><a href="#!">Alumni</a></li>
                      <li><a href="#!">Research</a></li>
                      <li><a href="#!">Community</a></li>
                  </ul>
              </div>
          </div>
        </div>
    </div>
    <div class="xb-header">
        <div class="container">
            <div class="header__wrap ul_li_between">
                <div class="header-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt=""></a>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li class="menu-item-has-children {{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                                <ul class="submenu">
                                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">University</a></li>
                                    <li><a href="#">College</a></li>
                                    <li><a href="#">High School</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Admission</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#!">Courses</a>
                                <ul class="submenu">
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Course Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#!">Pages</a>
                                <ul class="submenu">
                                    <li><a href="#">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Event</a>
                                        <ul class="submenu">
                                            <li><a href="#">Event</a></li>
                                            <li><a href="#">Event Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Team</a>
                                        <ul class="submenu">
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tuition & Fees</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="xb-header-wrap">
                        <div class="xb-header-menu">
                            <div class="xb-header-menu-scroll">
                                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                <div class="xb-logo-mobile xb-hide-xl">
                                <a href="{{ route('home') }}" rel="home"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt=""></a></div>
                                <div class="xb-header-mobile-search xb-hide-xl">
                                    <form role="search" action="#">
                                        <input type="text" placeholder="Search..." name="s" class="search-field">
                                        <button class="search-submit" type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                                <nav class="xb-header-nav">
                                    <ul class="xb-menu-primary clearfix">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="{{ route('home') }}">Home</a>
                                            <ul class="sub-menu">
                                                <li class="active"><a href="{{ route('home') }}">University</a></li>
                                                <li><a href="#">College</a></li>
                                                <li><a href="#">High School</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Admission</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#!">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Courses</a></li>
                                                <li><a href="#">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#!">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">About Us</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="#">Blog</a></li>
                                                        <li class="menu-item"><a href="#">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Event</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="#">Event</a></li>
                                                        <li class="menu-item"><a href="#">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Team</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="#">Team</a></li>
                                                        <li class="menu-item"><a href="#">Team Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="#">Tuition & Fees</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="xb-header-menu-backdrop"></div>
                    </div>
                </div>
                <div class="header-right ul_li">
                    <a class="header-search header-search-btn" href="javascript:void(0);">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 3.75H15" stroke="#170006" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.5 6H12.75" stroke="#170006" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.75 8.625C15.75 12.5625 12.5625 15.75 8.625 15.75C4.6875 15.75 1.5 12.5625 1.5 8.625C1.5 4.6875 4.6875 1.5 8.625 1.5" stroke="#170006" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.5 16.5L15 15" stroke="#170006" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Search
                    </a>
                    <div class="language_dropdown dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="flag">
                            <img src="{{ asset('assets/img/icon/flag.png') }}" alt="USA">
                          </span>
                          <span class="name">English</span>
                        </button>
                        <div class="dropdown-menu">
                          <ul class="unordered_list_block">
                            <!-- <li class="dropdown-item">
                              <span class="flag">
                                <img src="{{ asset('assets/img/icon/flag_saudi_arabia.webp') }}" alt="Saudi Arabia">
                              </span>
                              <span class="name">Arabic</span>
                            </li> -->
                            <li class="dropdown-item">
                              <span class="flag">
                                <img src="{{ asset('assets/img/icon/flag_bangladesh.webp') }}" alt="Bangladesh">
                              </span>
                              <span class="name">Bangali</span>
                            </li>
                            <li class="dropdown-item">
                              <span class="flag">
                                <img src="{{ asset('assets/img/icon/flag_usa.webp') }}" alt="USA">
                              </span>
                              <span class="name">English</span>
                            </li>
                            <!-- <li class="dropdown-item">
                              <span class="flag">
                                <img src="{{ asset('assets/img/icon/flag_portugal.webp') }}" alt="Portugal">
                              </span>
                              <span class="name">Portuguese</span>
                            </li> -->
                          </ul>
                        </div>
                      </div>
                </div>
                <div class="header-bar-mobile side-menu d-lg-none">
                    <a class="xb-nav-mobile" href="javascript:void(0);"><i class="fal fa-bars"></i></a>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- header search start -->
    <div class="header-search-form-wrapper">
        <div class="xb-search-close xb-close"></div>
        <div class="header-search-container">
            <form role="search" class="search-form" action="#">
                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                <button type="submit" class="search-submit"><i class="far fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- header search end -->

    <main>
        <!-- hero section start  -->
        <section class="hero o-hidden pos-rel">
            <div class="bg_img" data-background="{{ asset('assets/img/bg/hero_bg.jpg') }}">
                <div class="container">
                    <div class="hero__content-wrap text-center pt-55">
                        <div class="section-title clr-white">
                            <span class="sub-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration=".6s">Welcome to University</span>
                            <h1 class="title wow fadeInUp" data-wow-delay="150ms" data-wow-duration=".6s">Edubost University Your <br> Pathway to Success</h1>
                        </div>
                        <div class="xb-hero-img">
                            <img src="{{ asset('assets/img/hero/hero_img01.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end  -->

        <!-- hero btn start -->
        <div class="hero-btns">
            <div class="btns ul_li_center">
                <a class="thm-btn thm-btn--stroke-white sec-btn" href="#">explore programs
                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 4.84999V16.74C22 17.71 21.21 18.6 20.24 18.72L19.93 18.76C18.29 18.98 15.98 19.66 14.12 20.44C13.47 20.71 12.75 20.22 12.75 19.51V5.59999C12.75 5.22999 12.96 4.88999 13.29 4.70999C15.12 3.71999 17.89 2.83999 19.77 2.67999H19.83C21.03 2.67999 22 3.64999 22 4.84999Z" fill="white" />
                        <path d="M10.71 4.70999C8.87999 3.71999 6.10999 2.83999 4.22999 2.67999H4.15999C2.95999 2.67999 1.98999 3.64999 1.98999 4.84999V16.74C1.98999 17.71 2.77999 18.6 3.74999 18.72L4.05999 18.76C5.69999 18.98 8.00999 19.66 9.86999 20.44C10.52 20.71 11.24 20.22 11.24 19.51V5.59999C11.24 5.21999 11.04 4.88999 10.71 4.70999ZM4.99999 7.73999H7.24999C7.65999 7.73999 7.99999 8.07999 7.99999 8.48999C7.99999 8.90999 7.65999 9.23999 7.24999 9.23999H4.99999C4.58999 9.23999 4.24999 8.90999 4.24999 8.48999C4.24999 8.07999 4.58999 7.73999 4.99999 7.73999ZM7.99999 12.24H4.99999C4.58999 12.24 4.24999 11.91 4.24999 11.49C4.24999 11.08 4.58999 10.74 4.99999 10.74H7.99999C8.40999 10.74 8.74999 11.08 8.74999 11.49C8.74999 11.91 8.40999 12.24 7.99999 12.24Z" fill="white" />
                      </svg></span>
                </a>
                <a class="thm-btn thm-btn--stroke-white sec-btn" href="#">apply now
                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.25 19.492V20.75C16.25 21.164 15.914 21.5 15.5 21.5C15.086 21.5 14.75 21.164 14.75 20.75V19.5H16C16.084 19.5 16.167 19.497 16.25 19.492Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.75 19.5H8C5.929 19.5 4.25 17.821 4.25 15.75V12.668L9.964 15.825C11.202 16.509 12.798 16.509 14.036 15.825L14.75 15.431V19.5ZM16.25 14.602L19.75 12.668V15.75C19.75 17.737 18.205 19.363 16.25 19.492V14.602Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.75 14.288L13.552 14.95C12.608 15.472 11.392 15.472 10.448 14.95L2.134 10.356C1.568 10.043 1.25 9.49499 1.25 8.92199C1.25 8.34799 1.568 7.79999 2.134 7.48799L10.448 2.89299C11.392 2.37199 12.608 2.37199 13.552 2.89299L21.866 7.48799C22.432 7.79999 22.75 8.34799 22.75 8.92199C22.75 9.49499 22.432 10.043 21.866 10.356L16.25 13.459V12.75C16.25 12.551 16.171 12.36 16.03 12.22L12.53 8.71999C12.238 8.42699 11.762 8.42699 11.47 8.71999C11.177 9.01199 11.177 9.48799 11.47 9.77999L14.75 13.061V14.288Z" fill="white" />
                      </svg></span>
                </a>
                <a class="thm-btn thm-btn--stroke-white sec-btn" href="#">talk with a teacher
                    <span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.0364 2.63798C11.6702 1.79536 10.0512 1.33203 8.37891 1.33203C3.82654 1.33203 0 4.72368 0 9.06641C0 10.589 0.473 12.0486 1.37148 13.3092L0.116359 17.2497C-0.0162422 17.6659 0.295539 18.0898 0.730598 18.0898C0.83007 18.0898 0.930188 18.0669 1.02257 18.0198L4.83957 16.0791C4.99413 16.1456 5.15062 16.2076 5.3087 16.265C4.42496 14.8857 3.95312 13.3023 3.95312 11.6445C3.95312 6.70755 8.10726 2.91208 13.0364 2.63798Z" fill="white" />
                        <path d="M20.6285 15.8873C21.527 14.6267 22 13.1671 22 11.6445C22 7.30022 18.1718 3.91016 13.6211 3.91016C9.06873 3.91016 5.24219 7.30181 5.24219 11.6445C5.24219 15.9888 9.07036 19.3789 13.6211 19.3789C14.8421 19.3789 16.0588 19.1301 17.1602 18.6571L20.9774 20.598C21.2091 20.7158 21.4889 20.6829 21.6869 20.5146C21.885 20.3463 21.9626 20.0755 21.8837 19.8278L20.6285 15.8873ZM11 12.2891C10.644 12.2891 10.3555 12.0005 10.3555 12.0005C10.3555 11.6446 10.644 11.3555 11 11.3555C11.356 11.3555 11.6445 11.6446 11.6445 12.0005C11.6445 12.3564 11.356 12.6455 11 12.6455V12.2891ZM13.5781 12.2891C13.2222 12.2891 12.9336 12.0005 12.9336 12.0005C12.9336 11.6446 13.2222 11.3555 13.5781 11.3555C13.9341 11.3555 14.2227 11.6446 14.2227 12.0005C14.2227 12.3564 13.9341 12.6455 13.5781 12.6455V12.2891ZM16.1562 12.2891C15.8003 12.2891 15.5117 12.0005 15.5117 12.0005C15.5117 11.6446 15.8003 11.3555 16.1562 11.3555C16.5122 11.3555 16.8008 11.6446 16.8008 12.0005C16.8008 12.3564 16.5122 12.6455 16.1562 12.6455V12.2891Z" fill="white" />
                      </svg></span>
                </a>
            </div>
        </div>
        <!-- hero btn end -->

        <!-- blog section start  -->
        <section class="blog pt-115 pb-120 bg_img" data-background="{{ asset('assets/img/bg/news_bg01.jpg') }}">
            <div class="container">
                <div class="blog-sec-top ul_li_between">
                    <div class="section-title mb-40">
                        <span class="sub-title">Latest News</span>
                        <h1 class="title">Campus News</h1>
                    </div>
                    <div class="xb-topic">
                        <select name="Topic" id="seelct">
                            <option value="1">Topic</option>
                            <option value="2">Arts, Humanities, & Social Sciences</option>
                            <option value="3">Campus & Community</option>
                            <option value="4">Education, Business, & Law</option>
                            <option value="5">Health Sciences</option>
                            <option value="5">Science & Technology</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-8">
                        <div class="xb-blog__left">
                            <div class="xb-blog pos-rel mt-20">
                                <div class="xb-item--img">
                                    <a href="#!"><img src="{{ asset('assets/img/blog/blog-img01.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <a class="xb-item--cta" href="#!">#Study</a>
                                    <h2 class="xb-item--title border-effect-2"> <a href="blog-single.html">EduFord University Hosts International on Climate..</a></h2>
                                </div>
                            </div>
                            <div class="xb-blog pos-rel mt-20">
                                <div class="xb-item--img">
                                    <a href="#!"><img src="{{ asset('assets/img/blog/blog-img02.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <a class="xb-item--cta" href="#!">#Membership</a>
                                    <h2 class="xb-item--title border-effect-2"> <a href="blog-single.html">Thirty-one UChicago faculty members receive named..</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="xb-blog chn-margin pos-rel mt-20">
                            <div class="xb-item--img">
                                <a href="#!"><img src="{{ asset('assets/img/blog/blog-img03.png') }}" alt=""></a>
                            </div>
                            <div class="xb-item--holder">
                                <a class="xb-item--cta" href="#!">#Study programs</a>
                                <h2 class="xb-item--title border-effect"> <a href="blog-single.html">EduFord University Receives Grant for <br> Advanced STEM Programs..</a></h2>
                                <div class="xb-item--meta ul_li">
                                    <span><i class="far fa-user"></i>Louis Saville</span>
                                    <span><i class="far fa-clock"></i>2023/10/15</span>
                                    <span><i class="far fa-comment"></i>15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8">
                        <div class="xb-blog__right">
                            <div class="xb-blog mr-left pos-rel mt-20">
                                <div class="xb-item--img">
                                    <a href="#!"><img src="{{ asset('assets/img/blog/blog-img04.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <a class="xb-item--cta" href="#!">#Awarded</a>
                                    <h2 class="xb-item--title border-effect-2"> <a href="blog-single.html">our Awarded National for Community Outreach..</a></h2>
                                </div>
                            </div>
                            <div class="xb-blog mr-left pos-rel mt-20">
                                <div class="xb-item--img">
                                    <a href="#!"><img src="{{ asset('assets/img/blog/blog-img05.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <a class="xb-item--cta" href="#!">#Campus Life</a>
                                    <h2 class="xb-item--title border-effect-2"> <a href="blog-single.html">Expands Campus Facilities <br> with State of-the-Art Lab..</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xb-btn text-center pt-60">
                    <a class="thm-btn" href="blog.html">More Campus News
                        <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z" fill="#170006" />
                          </svg></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- blog section end  -->

        <!-- department section start  -->
        <section class="department pt-115 pb-200 pos-rel">
            <div class="container">
                <div class="section-title text-center mb-25">
                    <span class="sub-title">Our academics offerings</span>
                    <h1 class="title">Our Top Department</h1>
                </div>
                <div class="dep-inner pb-200 pos-rel">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-6 mt-30 mb-30 dp-col">
                            <div class="xb-dep-wrapper">
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.3771 29.7074C30.2873 26.775 32.8581 22.1506 32.9935 16.9295H17.3361L26.3771 29.7074ZM16.0673 16.4971C16.0673 16.5901 16.0969 16.6758 16.1473 16.7465L16.1466 16.7472L25.6724 30.2075C23.0476 31.9702 19.8918 33 16.4996 33C7.40178 33 0 25.5968 0 16.4971C0 7.5416 7.16834 0.229887 16.0673 0V16.4971ZM20.1087 16.0647V9.81886H16.9319V16.0647H20.1087ZM26.5536 16.0647V5.73709H23.3776V16.0647H26.5536ZM29.8226 16.0647H33V1.3541H29.8226V16.0647Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Economics</h3>
                                    <span>Course: 20</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="38" height="40" viewBox="0 0 38 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M30.2165 15.3261C27.9481 15.2536 25.0945 13.0745 21.509 14.5271V8.35357C26.7774 3.05131 30.9481 12.3484 37.3871 11.4042C36.9481 12.2758 36.2897 13.4771 33.2897 12.751L34.6068 14.3884C33.2897 14.8242 32.0458 14.092 30.7287 13.3655C30.2897 14.092 31.0945 14.7455 31.0945 15.2539C30.8748 15.2536 30.509 15.3261 30.2165 15.3261Z"
                                                fill="white" />
                                            <path
                                                d="M6.9055 15.181C6.9055 14.6726 7.71034 14.0187 7.2713 13.2926C5.95421 14.0917 4.71033 14.8239 3.39324 14.3155L4.71033 12.6781C1.71033 13.4046 1.05195 12.2029 0.612915 11.3313C6.97872 12.2755 11.1494 2.97875 16.491 8.28068V14.4546C12.4665 12.7842 9.32034 15.98 6.9055 15.181Z"
                                                fill="white" />
                                            <path
                                                d="M19.02 6.59742C20.8335 6.59742 22.3035 5.12054 22.3035 3.29871C22.3035 1.47688 20.8335 0 19.02 0C17.2065 0 15.7365 1.47688 15.7365 3.29871C15.7365 5.12054 17.2065 6.59742 19.02 6.59742Z"
                                                fill="white" />
                                            <path
                                                d="M19.02 40C18.6639 40 18.3749 39.711 18.3749 39.3549V6.38002C18.3749 6.0239 18.6639 5.73486 19.02 5.73486C19.3762 5.73486 19.6652 6.0239 19.6652 6.38002V39.3549C19.6652 39.711 19.3765 40 19.02 40Z"
                                                fill="white" />
                                            <path
                                                d="M24.7045 29.9349C24.1984 29.9349 23.8891 29.3523 24.1678 28.9326C24.6252 28.2439 25.1129 27.2229 24.8374 26.2681C24.4242 24.8365 22.3703 24.1926 21.1432 23.8078L20.8542 23.7165C19.3345 23.2297 18.0452 23.3094 16.7978 23.3855C15.2268 23.482 13.7436 23.5729 12.2745 22.4394C11.5723 21.8978 10.39 20.7307 10.3581 19.0016C10.322 17.069 11.7658 15.7874 12.2091 15.4403C12.4897 15.2207 12.8952 15.2707 13.1149 15.551C13.3345 15.8316 13.2849 16.2371 13.0042 16.4568C12.7732 16.6374 11.6226 17.6078 11.6481 18.9778C11.67 20.1681 12.5439 21.0174 13.0629 21.4178C14.1484 22.2555 15.2826 22.1855 16.7191 22.0974C18.022 22.0174 19.4981 21.9268 21.2484 22.4874L21.53 22.5761C23.0045 23.0384 25.4723 23.8123 26.0778 25.9097C26.4045 27.041 26.1158 28.3332 25.2429 29.6461C25.1184 29.8339 24.9136 29.9349 24.7045 29.9349Z"
                                                fill="white" />
                                            <path
                                                d="M22.8136 34.7355C22.3071 34.7355 21.9978 34.153 22.2768 33.7333C22.5774 33.281 22.8994 32.6152 22.7252 32.0113C22.462 31.0991 21.0736 30.6639 20.2442 30.4039L20.0394 30.3394C19.001 30.0065 18.1087 30.0613 17.2465 30.1146C16.1523 30.1823 15.0207 30.2513 13.9271 29.4078C13.4049 29.0049 12.5249 28.1349 12.501 26.8352C12.4739 25.3852 13.5494 24.4284 13.8794 24.1697C14.16 23.9501 14.5652 23.9997 14.7852 24.2797C15.0049 24.5604 14.9558 24.9655 14.6752 25.1855C14.5245 25.3036 13.7745 25.9362 13.791 26.8117C13.8052 27.5723 14.3762 28.1249 14.7155 28.3865C15.4249 28.9339 16.1558 28.8891 17.1674 28.8268C18.1032 28.7694 19.1639 28.7046 20.4329 29.1107L20.63 29.173C21.7071 29.5107 23.5094 30.0755 23.9649 31.6539C24.2113 32.5075 23.9994 33.4739 23.3516 34.4481C23.2271 34.6346 23.0223 34.7355 22.8136 34.7355Z"
                                                fill="white" />
                                            <path
                                                d="M21.2971 39.1291C20.7909 39.1291 20.4816 38.5465 20.7603 38.1268C20.9032 37.9116 21.1287 37.4997 21.0309 37.1603C20.888 36.6649 20.0338 36.3971 19.5232 36.2371L19.3855 36.1936C18.7335 35.9845 18.1603 36.02 17.6064 36.0539C16.8384 36.1013 16.0445 36.1497 15.2529 35.5391C14.5996 35.0342 14.2329 34.3671 14.22 33.6603C14.2003 32.5958 14.98 31.9007 15.2196 31.7129C15.5003 31.4932 15.9055 31.5423 16.1255 31.8226C16.3451 32.1029 16.2961 32.5084 16.0158 32.7284C15.9296 32.7958 15.5013 33.1565 15.51 33.6362C15.5177 34.0516 15.8461 34.3665 16.0409 34.5171C16.4306 34.8178 16.819 34.8097 17.5274 34.7655C18.1374 34.7284 18.8961 34.6816 19.779 34.9642L19.9093 35.0055C20.6174 35.2274 21.9355 35.641 22.2703 36.802C22.4522 37.4326 22.3019 38.1374 21.8345 38.8403C21.7106 39.0281 21.5058 39.1291 21.2971 39.1291Z"
                                                fill="white" />
                                            <path
                                                d="M25.0565 22.361C24.3542 22.361 24.1765 21.3487 24.8362 21.1093C25.85 20.7413 26.5155 19.8861 26.532 18.9313C26.5474 18.0252 25.9574 17.1719 25.0291 16.7577C24.7036 16.6126 24.5578 16.231 24.7026 15.9055C24.8481 15.5803 25.2297 15.4339 25.5549 15.579C26.9565 16.2045 27.8465 17.5287 27.822 18.9529C27.7962 20.4474 26.7971 21.7697 25.2765 22.3219C25.2042 22.3484 25.1297 22.361 25.0565 22.361Z"
                                                fill="white" />
                                            <path
                                                d="M16.9209 39.4952C16.5471 39.4952 16.1803 39.3645 15.89 39.1235C15.5551 38.8458 15.35 38.4448 15.3268 38.0235C15.2822 37.2023 15.929 36.4677 16.7684 36.3861C17.1248 36.3532 17.4384 36.6113 17.4729 36.9658C17.5071 37.3206 17.2477 37.6358 16.8932 37.6703C16.499 37.7087 16.5771 38.2539 16.9613 38.2019C17.3435 38.15 17.6929 38.4597 17.6909 38.8448C17.689 39.2797 17.3129 39.4952 16.9209 39.4952Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Medical</h3>
                                    <span>Course: 22</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30 mb-30 dp-col">
                            <div class="xb-dep-wrapper">
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26.6953 28.2891C25.5828 28.2891 24.6285 28.9768 24.2336 29.9492H21.9141V31.9414H24.2336C24.6285 32.9139 25.5828 33.6016 26.6953 33.6016C28.16 33.6016 29.3516 32.41 29.3516 30.9453C29.3516 29.4807 28.16 28.2891 26.6953 28.2891Z"
                                                fill="white" />
                                            <path
                                                d="M31.3438 22.6445C30.9071 22.6445 30.4952 22.751 30.1314 22.9385L27.665 20.8832C27.486 20.734 27.2604 20.6523 27.0273 20.6523H21.9141V22.6445H26.6667L28.8292 24.4467C28.7378 24.7149 28.6875 25.002 28.6875 25.3008C28.6875 26.7654 29.8791 27.957 31.3438 27.957C32.8084 27.957 34 26.7654 34 25.3008C34 23.8361 32.8084 22.6445 31.3438 22.6445Z"
                                                fill="white" />
                                            <path
                                                d="M31.3438 14.3438C30.2312 14.3438 29.2769 15.0315 28.882 16.0039H21.9141V17.9961H28.882C29.2769 18.9685 30.2312 19.6562 31.3438 19.6562C32.8084 19.6562 34 18.4647 34 17C34 15.5353 32.8084 14.3438 31.3438 14.3438Z"
                                                fill="white" />
                                            <path
                                                d="M27.665 13.1168L30.1314 11.0614C30.4952 11.249 30.9071 11.3555 31.3438 11.3555C32.8084 11.3555 34 10.1639 34 8.69922C34 7.23456 32.8084 6.04297 31.3438 6.04297C29.8791 6.04297 28.6875 7.23456 28.6875 8.69922C28.6875 8.99805 28.7378 9.28512 28.8292 9.55334L26.6667 11.3555H21.9141V13.3477H27.0273C27.2604 13.3477 27.486 13.266 27.665 13.1168Z"
                                                fill="white" />
                                            <path
                                                d="M26.6953 5.71094C28.16 5.71094 29.3516 4.51934 29.3516 3.05469C29.3516 1.59003 28.16 0.398438 26.6953 0.398438C25.5828 0.398438 24.6285 1.08614 24.2336 2.05859H21.9141V4.05078H24.2336C24.6285 5.02323 25.5828 5.71094 26.6953 5.71094Z"
                                                fill="white" />
                                            <path
                                                d="M9.96094 17C9.96094 20.8447 13.0889 23.9727 16.9336 23.9727C18.0024 23.9727 19.0156 23.7306 19.9219 23.299V10.701C19.0156 10.2694 18.0024 10.0273 16.9336 10.0273C13.0889 10.0273 9.96094 13.1553 9.96094 17Z"
                                                fill="white" />
                                            <path
                                                d="M18.9258 0.0664062H14.9414C14.3913 0.0664062 13.9453 0.512391 13.9453 1.0625V2.35908C12.0762 2.73986 10.2875 3.48088 8.69417 4.53448L7.7771 3.61748C7.38809 3.22847 6.75743 3.22847 6.36843 3.61748L3.55107 6.43483C3.16207 6.82377 3.16207 7.4545 3.55107 7.84351L4.46808 8.76058C3.41448 10.3539 2.67345 12.1426 2.29268 14.0117H0.996094C0.445984 14.0117 0 14.4577 0 15.0078V18.9922C0 19.5423 0.445984 19.9883 0.996094 19.9883H2.29268C2.67345 21.8574 3.41448 23.6461 4.46808 25.2395L3.55101 26.1566C3.36421 26.3434 3.25929 26.5967 3.25929 26.8609C3.25929 27.125 3.36421 27.3783 3.55101 27.5651L6.36843 30.3825C6.75743 30.7715 7.38809 30.7715 7.7771 30.3825L8.69417 29.4655C10.2875 30.5191 12.0762 31.2601 13.9453 31.6409V32.9375C13.9453 33.4876 14.3913 33.9336 14.9414 33.9336H18.9258C19.4759 33.9336 19.9219 33.4876 19.9219 32.9375V25.4521C18.9867 25.7837 17.981 25.9648 16.9336 25.9648C11.9904 25.9648 7.96875 21.9432 7.96875 17C7.96875 12.0568 11.9904 8.03516 16.9336 8.03516C17.981 8.03516 18.9867 8.21631 19.9219 8.54795V1.0625C19.9219 0.512391 19.4759 0.0664062 18.9258 0.0664062Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Technology</h3>
                                    <span>Course: 18</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="28" height="34" viewBox="0 0 28 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24 0H0V30H24V0ZM9 24H4V22H9V24ZM9 20H4V18H9V20ZM12.5251 13.5607L13.5858 12.5L12.5251 11.4393L13.9393 10.0251L15 11.0858L16.0607 10.0251L17.4749 11.4393L16.4142 12.5L17.4749 13.5607L16.0607 14.9749L15 13.9142L13.9393 14.9749L12.5251 13.5607ZM20 24H15V22H20V24ZM20 20H15V18H20V20ZM20 8H11.5662L7.82027 14.2432L5.323 8H4V6H6.677L8.17973 9.7568L10.4338 6H20V8Z"
                                                fill="white" />
                                            <path d="M26 4V32H4V34H28V4H26Z" fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Mathematics</h3>
                                    <span>Course: 26</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30 mb-30 dp-col">
                            <div class="xb-dep-wrapper">
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.204 24.48C9.83005 24.48 9.52405 24.786 9.52405 25.16C9.52405 25.534 9.83005 25.84 10.204 25.84C10.578 25.84 10.884 25.534 10.884 25.16C10.884 24.786 10.578 24.48 10.204 24.48Z"
                                                fill="white" />
                                            <path
                                                d="M8.84408 4.08H25.1641C26.2901 4.08 27.2041 3.16605 27.2041 2.04C27.2041 0.913949 26.2901 0 25.1641 0H8.84408C7.71803 0 6.80408 0.913949 6.80408 2.04C6.80408 3.16605 7.71803 4.08 8.84408 4.08Z"
                                                fill="white" />
                                            <path
                                                d="M9.52408 5.43994V10.1999C9.52408 10.8881 9.2997 11.6034 8.92297 12.3528C12.8397 13.4925 14.4881 12.8397 16.32 12.0985C18.2023 11.3383 20.2749 10.5141 24.6255 11.1411C24.5426 10.8228 24.4841 10.5087 24.4841 10.1999V5.43994H9.52408Z"
                                                fill="white" />
                                            <path
                                                d="M33.6505 25.8223C32.3286 21.9939 30.0139 19.0631 27.9725 16.4764C26.8737 15.0851 25.8713 13.8067 25.224 12.6126C20.6517 11.8143 18.6484 12.6221 16.826 13.3592C15.602 13.8543 14.4079 14.3384 12.648 14.3384C11.4771 14.3384 10.0559 14.1235 8.20626 13.5592C7.59971 14.4785 6.84354 15.4441 6.02893 16.4764C3.98621 19.0631 1.67282 21.9939 0.349539 25.8223C-0.314125 27.744 -0.0231326 29.7922 1.15193 31.4391C2.31071 33.0657 4.12221 34 6.12409 34H27.8759C29.8779 34 31.6907 33.0657 32.8481 31.4391C34.0232 29.7922 34.3142 27.744 33.6505 25.8223ZM10.2014 27.2C9.07665 27.2 8.16137 26.2847 8.16137 25.16C8.16137 24.0353 9.07665 23.12 10.2014 23.12C11.3261 23.12 12.2414 24.0353 12.2414 25.16C12.2414 26.2847 11.3261 27.2 10.2014 27.2ZM19.04 21.76C17.54 21.76 16.32 20.54 16.32 19.04C16.32 17.5399 17.54 16.32 19.04 16.32C20.5401 16.32 21.76 17.5399 21.76 19.04C21.76 20.54 20.5401 21.76 19.04 21.76ZM23.7987 29.92C22.674 29.92 21.7587 29.0047 21.7587 27.88C21.7587 26.7553 22.674 25.84 23.7987 25.84C24.9234 25.84 25.8387 26.7553 25.8387 27.88C25.8387 29.0047 24.9234 29.92 23.7987 29.92Z"
                                                fill="white" />
                                            <path
                                                d="M19.0441 17.6801C18.2934 17.6801 17.6841 18.2893 17.6841 19.0401C17.6841 19.7908 18.2934 20.4001 19.0441 20.4001C19.7948 20.4001 20.4041 19.7908 20.4041 19.0401C20.4041 18.2893 19.7948 17.6801 19.0441 17.6801Z"
                                                fill="white" />
                                            <path
                                                d="M23.804 27.2C23.43 27.2 23.124 27.506 23.124 27.88C23.124 28.254 23.43 28.5599 23.804 28.5599C24.178 28.5599 24.484 28.254 24.484 27.88C24.484 27.506 24.178 27.2 23.804 27.2Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Science</h3>
                                    <span>Course: 22</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.8708 35.8699C14.1234 36.3025 14.5364 36.6179 15.0203 36.7476C15.5041 36.8773 16.0195 36.8108 16.4546 36.5626L32.9401 27.0447C32.2872 26.8123 31.7384 26.3551 31.3919 25.7549C31.0454 25.1548 30.9238 24.4509 31.0489 23.7693L14.5649 33.2864C14.133 33.5394 13.8179 33.9523 13.6881 34.4358C13.5582 34.9193 13.6239 35.4345 13.8709 35.8699H13.8708ZM1.71805 12.0708L13.6214 32.688C13.2275 33.0209 12.9288 33.4522 12.7556 33.9381L1.41628 14.2967C1.22478 13.9415 1.15083 13.5346 1.20505 13.1347C1.25927 12.7347 1.43887 12.3622 1.71805 12.0708ZM17.5855 7.94577L9.52535 12.5993L12.374 17.5333L20.4342 12.8798L17.5855 7.94577ZM31.8293 21.693L27.3352 13.9092C27.3333 14.1394 27.2531 14.362 27.108 14.5406C26.9628 14.7193 26.7613 14.8432 26.5364 14.8923L25.7511 15.0624C25.6136 15.0917 25.4714 15.0921 25.3337 15.0637C25.1959 15.0353 25.0656 14.9786 24.9509 14.8972C24.8362 14.8158 24.7396 14.7115 24.6672 14.5909C24.5949 14.4702 24.5484 14.3359 24.5306 14.1964L23.9888 9.63061C23.3913 9.62841 22.8079 9.44878 22.3127 9.11452C21.8174 8.78025 21.4326 8.30642 21.2071 7.75312C20.9816 7.19982 20.9255 6.592 21.0459 6.00678C21.1664 5.42155 21.458 4.88529 21.8837 4.46602L20.2845 1.697C20.2352 1.61192 20.1541 1.54985 20.0591 1.52439C19.9641 1.49892 19.8629 1.51212 19.7776 1.5611L2.5781 11.4913L14.4938 32.13L31.6934 22.1996C31.7784 22.1502 31.8404 22.0692 31.8659 21.9743C31.8913 21.8794 31.8782 21.7783 31.8293 21.693ZM11.7356 18.5L8.36909 12.6691C8.30021 12.5502 8.2814 12.4087 8.31679 12.2759C8.35219 12.1431 8.43889 12.0298 8.55783 11.9609L17.5156 6.78922C17.6345 6.72034 17.776 6.70152 17.9088 6.73692C18.0416 6.77231 18.155 6.85901 18.2239 6.97796L21.5902 12.8089C21.6256 12.8702 21.6481 12.9381 21.6563 13.0084C21.6645 13.0787 21.6582 13.1499 21.6378 13.2177C21.6174 13.2855 21.5834 13.3484 21.5378 13.4026C21.4922 13.4567 21.436 13.501 21.3727 13.5326L12.4418 18.6888C12.323 18.7569 12.1821 18.7753 12.0498 18.7399C11.9175 18.7046 11.8045 18.6184 11.7356 18.5ZM13.0597 25.5145C13.0256 25.4556 13.0034 25.3905 12.9944 25.323C12.9855 25.2556 12.9899 25.187 13.0074 25.1212C13.0249 25.0555 13.0552 24.9938 13.0966 24.9397C13.1379 24.8857 13.1896 24.8403 13.2485 24.8062L26.2945 17.274C26.4134 17.2051 26.5549 17.1863 26.6877 17.2217C26.8205 17.2571 26.9339 17.3438 27.0027 17.4628C27.0716 17.5817 27.0905 17.7232 27.0551 17.856C27.0197 17.9888 26.933 18.1021 26.814 18.171L13.7679 25.7031C13.709 25.7372 13.644 25.7594 13.5765 25.7684C13.5091 25.7774 13.4405 25.773 13.3747 25.7555C13.309 25.738 13.2473 25.7077 13.1933 25.6663C13.1392 25.6249 13.0938 25.5734 13.0597 25.5145ZM28.0553 20.3211L15.0093 27.8532C14.9504 27.8874 14.8854 27.9095 14.8179 27.9185C14.7504 27.9275 14.6818 27.9231 14.6161 27.9056C14.5503 27.888 14.4886 27.8577 14.4346 27.8164C14.3805 27.775 14.3351 27.7234 14.301 27.6645C14.2669 27.6056 14.2447 27.5406 14.2358 27.4731C14.2268 27.4056 14.2312 27.337 14.2487 27.2713C14.2662 27.2055 14.2965 27.1438 14.3379 27.0898C14.3793 27.0357 14.4309 26.9903 14.4898 26.9562L27.5358 19.4241C27.6547 19.3552 27.7962 19.3364 27.929 19.3718C28.0618 19.4071 28.1752 19.4939 28.2441 19.6128C28.313 19.7318 28.3318 19.8732 28.2964 20.006C28.261 20.1389 28.1743 20.2522 28.0553 20.3211ZM34.5241 1.18748C34.3531 1.18828 34.1893 1.25657 34.0684 1.37749C33.9475 1.49841 33.8792 1.66218 33.8784 1.83319V11.3907C33.8824 11.5592 33.9522 11.7195 34.0728 11.8372C34.1934 11.955 34.3553 12.0209 34.5239 12.0209C34.6925 12.0209 34.8543 11.955 34.975 11.8372C35.0956 11.7195 35.1654 11.5592 35.1694 11.3907V1.83259C35.1686 1.66159 35.1003 1.49782 34.9794 1.3769C34.8585 1.25598 34.6947 1.18769 34.5237 1.18689L34.5241 1.18748ZM36.2088 5.81332V7.41191C36.3827 7.36242 36.5357 7.25759 36.6446 7.11332C36.7536 6.96905 36.8125 6.7932 36.8125 6.61243C36.8125 6.43165 36.7536 6.25581 36.6446 6.11154C36.5357 5.96727 36.3827 5.86244 36.2088 5.81294V5.81332ZM26.7848 8.40548C28.8496 8.65946 30.9989 9.21409 32.8395 10.2055V3.01779C30.9988 4.00921 28.8495 4.56384 26.7848 4.81782V8.40548ZM25.0339 9.63076L25.5578 14.0421L26.2957 13.8822L25.8032 9.63076H25.0339ZM25.7457 4.6296H24.0023C23.4769 4.6296 22.9731 4.83831 22.6015 5.20981C22.23 5.58132 22.0213 6.08519 22.0213 6.61057C22.0213 7.13596 22.23 7.63983 22.6015 8.01133C22.9731 8.38284 23.4769 8.59155 24.0023 8.59155H25.7453L25.7457 4.6296Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Marketing</h3>
                                    <span>Course: 20</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30 mb-30 dp-col">
                            <div class="xb-dep-wrapper">
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.58618 26.1668V0H2.2236C1.13209 0 0.244385 0.887708 0.244385 1.97921V26.7144C0.82327 26.3668 1.5003 26.1668 2.2236 26.1668H2.58618Z"
                                                fill="white" />
                                            <path
                                                d="M11.5451 8.2082C9.79561 9.88635 9.79536 12.9069 11.5452 14.5847C15.9491 18.6401 21.9757 12.6113 17.9216 8.2082C16.1637 6.45029 13.3031 6.45029 11.5451 8.2082Z"
                                                fill="white" />
                                            <path
                                                d="M18.3516 20.0184L20.1901 18.1799L18.536 16.5251C17.4113 17.3603 16.0723 17.7779 14.7332 17.7779C9.12514 17.8159 6.19933 10.8831 10.2185 6.88218C15.9819 1.46291 24.36 8.76599 19.8619 15.1992L21.5167 16.854L23.3552 15.0154L26.0596 17.7198V0H4.46143V26.1668H24.4999L18.3516 20.0184Z"
                                                fill="white" />
                                            <path
                                                d="M2.22349 28.0422C1.16511 28.0422 0.298034 28.8768 0.246772 29.9221H0.244271C0.193009 31.0469 1.0941 32.0031 2.22349 32H26.0597V28.0422C21.0108 28.0422 7.44433 28.0422 2.22349 28.0422Z"
                                                fill="white" />
                                            <path
                                                d="M29.2717 23.5836C27.5317 21.8436 25.1119 19.4238 23.3553 17.6672L21.0042 20.0184C21.6904 20.6996 26.434 25.4591 26.9974 26.0067C27.626 26.5841 28.6796 26.5503 29.2717 25.9348C29.92 25.2865 29.92 24.2319 29.2717 23.5836Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Research</h3>
                                    <span>Course: 17</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                                <div class="xb-department text-center pos-rel">
                                    <div class="xb-item--icon">
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.6877 26.2304C34.3539 24.5163 35.5531 22.404 36.1712 20.0949C36.7892 17.7858 36.8055 15.3569 36.2183 13.0397C36.0412 12.2653 33.3899 1.76535 20.0877 2.6841C19.9983 2.67596 9.69918 3.41275 7.94055 12.1276C7.93398 12.1997 7.32367 19.6482 5.58461 22.0828C5.47108 22.2438 5.39606 22.4287 5.36534 22.6233C5.33462 22.8179 5.34902 23.0169 5.40742 23.205C5.46655 23.4006 5.56934 23.5802 5.70804 23.7303C5.84673 23.8804 6.0177 23.997 6.20805 24.0713L8.28836 24.8719V25.0097L7.88148 25.305C7.74809 25.3999 7.64126 25.5274 7.57123 25.6753C7.50119 25.8233 7.4703 25.9867 7.48149 26.15C7.49268 26.3133 7.5456 26.471 7.63516 26.608C7.72473 26.745 7.84795 26.8568 7.99305 26.9325C7.86918 27.031 7.77149 27.1584 7.70862 27.3036C7.64576 27.4488 7.61966 27.6073 7.63264 27.7649C7.64562 27.9226 7.69727 28.0747 7.78303 28.2076C7.86879 28.3406 7.986 28.4504 8.1243 28.5272L8.7543 28.8619C8.28684 29.4343 8.06514 30.1686 8.13772 30.904C8.21029 31.6395 8.57122 32.3162 9.14154 32.7862C9.2793 32.9372 10.6115 34.2432 14.2537 33.2719C14.407 33.2364 14.5659 33.2326 14.7207 33.2608C14.8755 33.289 15.0229 33.3486 15.1539 33.4359C15.2848 33.5232 15.3965 33.6363 15.4821 33.7684C15.5676 33.9005 15.6253 34.0486 15.6515 34.2038C15.8615 35.0307 16.334 37.4325 16.0715 38.5744C16.0493 38.6793 16.0528 38.788 16.0818 38.8912C16.1107 38.9945 16.1643 39.0892 16.2378 39.1672C16.3113 39.2452 16.4026 39.3043 16.504 39.3394C16.6053 39.3744 16.7136 39.3844 16.8196 39.3685L32.924 36.6254C33.0212 36.6088 33.1133 36.5704 33.1936 36.5132C33.2739 36.456 33.3401 36.3813 33.3875 36.2948C33.4348 36.2084 33.462 36.1123 33.467 36.0138C33.4719 35.9154 33.4546 35.8171 33.4162 35.7263C30.299 28.3107 32.6746 26.2435 32.6877 26.2304ZM28.7305 23.1066C27.7316 23.1186 26.7614 22.7725 25.9958 22.1308C25.2301 21.4891 24.7196 20.5944 24.5568 19.6088C23.7951 19.5257 23.0844 19.1854 22.5421 18.6441C22.02 18.1285 21.3678 17.0255 22.3124 16.6819C22.3956 16.6599 22.4823 16.6545 22.5675 16.666C22.6528 16.6775 22.735 16.7057 22.8093 16.7489C22.8837 16.7922 22.9488 16.8497 23.0009 16.9182C23.053 16.9866 23.0911 17.0647 23.113 17.1479C23.5664 18.3993 25.357 18.6819 26.3418 17.8566C26.623 17.6378 26.8427 17.3499 26.9795 17.021C27.1164 16.6921 27.1657 16.3334 27.1227 15.9797C27.1133 15.8072 27.172 15.6379 27.2863 15.5083C27.4007 15.3788 27.5614 15.2994 27.7337 15.2873C27.9061 15.2753 28.0763 15.3315 28.2075 15.4438C28.3388 15.5562 28.4206 15.7157 28.4352 15.8878C28.5023 16.6969 28.2826 17.5038 27.8147 18.1673C27.3468 18.8307 26.6604 19.3084 25.8757 19.5168C26.399 21.7496 28.7308 22.2151 30.4302 21.4396C32.8448 20.5462 33.0804 17.9141 31.7688 16.2816C31.5253 16.7989 31.1543 17.8848 30.4172 17.9682C30.2924 17.9664 30.1708 17.9296 30.0661 17.8618C29.9613 17.794 29.8778 17.6982 29.8251 17.5851C29.7724 17.4721 29.7525 17.3465 29.7679 17.2228C29.7832 17.099 29.8331 16.982 29.9118 16.8853C31.5918 14.9166 30.2006 12.3769 30.1875 12.3506C29.1047 10.3688 26.5978 10.3425 26.5256 10.3425C26.4127 10.3453 26.3011 10.3183 26.202 10.2641C26.1029 10.2099 26.0198 10.1306 25.9612 10.0341C23.1484 5.70183 16.1498 7.8965 16.9378 12.9938C16.9657 13.1638 16.9257 13.3379 16.8265 13.4787C16.7273 13.6195 16.5768 13.7157 16.4073 13.7466C16.2379 13.7776 16.0631 13.7408 15.9205 13.6442C15.778 13.5475 15.679 13.3988 15.645 13.23C15.5592 12.6715 15.5525 12.1037 15.6253 11.5434C12.659 12.1997 12.449 14.5622 12.4425 14.6672C12.2826 15.7249 12.52 16.8045 13.1089 17.6976C13.6978 18.5907 14.5966 19.2341 15.6319 19.5037C15.6289 18.9722 15.7308 18.4453 15.9318 17.9532C16.1328 17.4612 16.429 17.0136 16.8033 16.6362C17.1777 16.2589 17.6228 15.9591 18.1132 15.7541C18.6036 15.5491 19.1297 15.4428 19.6612 15.4415C20.1451 15.394 20.6065 15.546 20.6259 16.0978C20.6096 16.6551 20.1403 16.8006 19.6612 16.754C18.9449 16.7605 18.2602 17.0496 17.756 17.5584C17.2517 18.0672 16.9689 18.7546 16.9689 19.4709C16.9689 20.1872 17.2518 20.8746 17.756 21.3834C18.2602 21.8922 18.945 22.1813 19.6613 22.1878H21.5184C22.1631 22.1889 22.7811 22.446 23.2364 22.9025C23.6917 23.3591 23.9471 23.9777 23.9465 24.6225V28.1137C23.944 28.2862 23.8738 28.4507 23.751 28.5718C23.6282 28.6929 23.4627 28.7607 23.2902 28.7607C23.1178 28.7607 22.9522 28.6929 22.8294 28.5718C22.7066 28.4507 22.6364 28.2861 22.634 28.1137V24.6225C22.6345 24.3259 22.5173 24.0412 22.3082 23.8308C22.099 23.6204 21.815 23.5016 21.5184 23.5004H19.6612C18.8503 23.4986 18.0587 23.2529 17.3893 22.7953C16.7198 22.3377 16.2035 21.6893 15.9074 20.9344C13.8927 20.5407 10.7755 18.841 11.1299 14.5688C11.1299 14.5491 11.4055 10.7757 15.9599 10.1588C17.5459 5.70392 24.2723 5.137 26.8734 9.04985C28.2981 9.10072 29.6445 9.71437 30.6175 10.7563C31.5905 11.7982 32.1108 13.1834 32.0642 14.6082C35.2298 17.5278 34.3313 22.7915 28.7305 23.1066ZM23.1196 11.3991C22.8206 11.1769 22.4459 11.082 22.0771 11.1348C21.7084 11.1877 21.3755 11.3841 21.1509 11.6813C21.1103 11.7748 21.0491 11.8578 20.9718 11.9243C20.8945 11.9907 20.8032 12.0388 20.7047 12.0648C20.6062 12.0909 20.5031 12.0944 20.4031 12.0749C20.303 12.0554 20.2087 12.0135 20.1272 11.9524C20.0457 11.8913 19.9791 11.8124 19.9324 11.7219C19.8857 11.6313 19.8601 11.5313 19.8576 11.4295C19.8551 11.3276 19.8756 11.2265 19.9178 11.1337C19.9599 11.0409 20.0225 10.9589 20.1009 10.8938C22.3335 8.08165 26.5211 11.2205 24.4518 14.162C24.4109 14.2548 24.3495 14.3373 24.2723 14.4031C24.1951 14.469 24.104 14.5166 24.0058 14.5423C23.9077 14.568 23.805 14.5712 23.7054 14.5517C23.6058 14.5322 23.5119 14.4904 23.4307 14.4295C23.3496 14.3686 23.2832 14.2902 23.2366 14.2C23.1899 14.1099 23.1643 14.0104 23.1615 13.9089C23.1587 13.8075 23.1789 13.7067 23.2205 13.6142C23.2621 13.5216 23.3241 13.4397 23.4018 13.3744C23.626 13.0749 23.7222 12.6987 23.6693 12.3284C23.6164 11.958 23.4187 11.6238 23.1196 11.3991Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <h3 class="xb-item--title">Health & Fitness</h3>
                                    <span>Course: 18</span>
                                    <a class="div-link" href="courses.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xb-feature-shape">
                    <span class="shape shape--one"><img data-parallax='{"x":-50,"y":-80}'
                            src="{{ asset('assets/img/shape/stamp.png') }}" alt=""></span>
                    <span class="shape shape--two"><img data-parallax='{"x":50,"y":80}'
                            src="{{ asset('assets/img/shape/cap.png') }}" alt=""></span>
                </div>
            </div>
        </section>
        <!-- department section end  -->

        <!-- fanfact section start -->
        <section class="fanfact pos-rel">
            <div class="container">
                <div class="fanfact-wrapper">
                    <div class="fanfact-slider swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="xb-fanfact__wrapper pos-rel">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/feature/feature-img01.png') }}" alt="University Institutes">
                                    </div>
                                    <h2 class="xb-item--title">our teaching quality is best <br> from other university</h2>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--number">15+</h3>
                                        <h2 class="xb-item--text">Institutes in University</h2>
                                        <p class="xb-item--content">Edubost University hosts a variety of specialized institutes focused on advancing knowledge.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="xb-fanfact__wrapper pos-rel">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/feature/feature-img03.png') }}" alt="University Libraries">
                                    </div>
                                    <h2 class="xb-item--title">our teaching quality is best <br> from other university</h2>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--number">10+</h3>
                                        <h2 class="xb-item--text">library in University</h2>
                                        <p class="xb-item--content">Edubost University hosts a variety of specialized institutes focused on advancing knowledge.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="xb-fanfact__wrapper pos-rel">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/feature/feature-img01.png') }}" alt="University Institutes">
                                    </div>
                                    <h2 class="xb-item--title">our teaching quality is best <br> from other university</h2>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--number">15+</h3>
                                        <h2 class="xb-item--text">Institutes in University</h2>
                                        <p class="xb-item--content">Edubost University hosts a variety of specialized institutes focused on advancing knowledge.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination ul_li_center"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fanfact section end -->

        <!-- program section start -->
        <section class="program pos-rel pt-115">
            <div class="container">
                <div class="pro-top ul_li_between mb-40">
                    <div class="section-title mb-20">
                        <span class="sub-title">Our academics offerings</span>
                        <h1 class="title">Top Programs</h1>
                    </div>
                    <div class="pro-btn mb-20">
                        <a class="thm-btn thm-btn--stroke-black" href="courses.html">view all programs
                            <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 4.84993V16.7399C22 17.7099 21.21 18.5999 20.24 18.7199L19.93 18.7599C18.29 18.9799 15.98 19.6599 14.12 20.4399C13.47 20.7099 12.75 20.2199 12.75 19.5099V5.59993C12.75 5.22993 12.96 4.88993 13.29 4.70993C15.12 3.71993 17.89 2.83993 19.77 2.67993H19.83C21.03 2.67993 22 3.64993 22 4.84993Z" fill="#170006" />
                                <path d="M10.71 4.70993C8.87999 3.71993 6.10999 2.83993 4.22999 2.67993H4.15999C2.95999 2.67993 1.98999 3.64993 1.98999 4.84993V16.7399C1.98999 17.7099 2.77999 18.5999 3.74999 18.7199L4.05999 18.7599C5.69999 18.9799 8.00999 19.6599 9.86999 20.4399C10.52 20.7099 11.24 20.2199 11.24 19.5099V5.59993C11.24 5.21993 11.04 4.88993 10.71 4.70993ZM4.99999 7.73993H7.24999C7.65999 7.73993 7.99999 8.07993 7.99999 8.48993C7.99999 8.90993 7.65999 9.23993 7.24999 9.23993H4.99999C4.58999 9.23993 4.24999 8.90993 4.24999 8.48993C4.24999 8.07993 4.58999 7.73993 4.99999 7.73993ZM7.99999 12.2399H4.99999C4.58999 12.2399 4.24999 11.9099 4.24999 11.4899C4.24999 11.0799 4.58999 10.7399 4.99999 10.7399H7.99999C8.40999 10.7399 8.74999 11.0799 8.74999 11.4899C8.74999 11.9099 8.40999 12.2399 7.99999 12.2399Z" fill="#170006" />
                              </svg></span>
                        </a>
                    </div>
                </div>
                <div class="row mt-none-60">
                    <!-- Program 1 -->
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="xb-program__wrapper">
                            <div class="xb-item--img text-center">
                                <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img01.png') }}" alt="MBA in Biomedical Engineering"></a>
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--deprt ul_li_between">
                                    <span class="xb-item--group"># Medical</span>
                                    <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="Rating"></div>
                                </div>
                                <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Biomedical Engineering..</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">200 Seat</li>
                                    <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                </ul>
                                <div class="xb-item--dep-btn">
                                    <a href="course-single.html">enroll now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Program 2 -->
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="xb-program__wrapper">
                            <div class="xb-item--img text-center">
                                <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img02.png') }}" alt="MBA in Advanced Construction"></a>
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--deprt ul_li_between">
                                    <span class="xb-item--group"># Management</span>
                                    <div class="xb-item--rating"><span>4.5</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="Rating"></div>
                                </div>
                                <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Advanced Construction..</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">250 Seat</li>
                                    <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                </ul>
                                <div class="xb-item--dep-btn">
                                    <a href="course-single.html">enroll now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Program 3 -->
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="xb-program__wrapper">
                            <div class="xb-item--img text-center">
                                <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img03.png') }}" alt="MBA in Management and Strategic"></a>
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--deprt ul_li_between">
                                    <span class="xb-item--group"># Construction</span>
                                    <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="Rating"></div>
                                </div>
                                <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Management and Strategic..</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">280 Seat</li>
                                    <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                </ul>
                                <div class="xb-item--dep-btn">
                                    <a href="course-single.html">enroll now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Program 4 -->
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="xb-program__wrapper">
                            <div class="xb-item--img text-center">
                                <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img04.png') }}" alt="MBA in Mechanical Engineering"></a>
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--deprt ul_li_between">
                                    <span class="xb-item--group"># Engineering</span>
                                    <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="Rating"></div>
                                </div>
                                <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Mechanical Engineering..</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">220 Seat</li>
                                    <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                </ul>
                                <div class="xb-item--dep-btn">
                                    <a href="course-single.html">enroll now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Program 5 -->
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="xb-program__wrapper">
                            <div class="xb-item--img text-center">
                                <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img05.png') }}" alt="MBA in Sustainable Energy"></a>
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--deprt ul_li_between">
                                    <span class="xb-item--group"># Energy</span>
                                    <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="Rating"></div>
                                </div>
                                <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Sustainable Energy..</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">200 Seat</li>
                                    <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                </ul>
                                <div class="xb-item--dep-btn">
                                    <a href="course-single.html">enroll now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Program 6 -->
                    <div class="col-lg-4 col-md-6 mt-60">
                        <div class="xb-program__wrapper">
                            <div class="xb-item--img text-center">
                                <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img06.png') }}" alt="MBA in Real Estate and Urban"></a>
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--deprt ul_li_between">
                                    <span class="xb-item--group"># Real Estate</span>
                                    <div class="xb-item--rating"><span>4.9</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="Rating"></div>
                                </div>
                                <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Real Estate and Urban..</a></h2>
                                <ul class="xb-item--meta ul_li">
                                    <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">230 Seat</li>
                                    <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                </ul>
                                <div class="xb-item--dep-btn">
                                    <a href="course-single.html">enroll now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="xb-cta bg_img mt-120 pos-rel" data-background="{{ asset('assets/img/bg/pro-banner.png') }}">
                    <h2 class="mb-15">Get Your Quality Skills Certificate Through Edubost</h2>
                    <div class="xb-btn xb-cta-btn ul_li">
                        <a class="thm-btn btn-yellow mt-20" href="contact.html">apply now
                            <span><img src="{{ asset('assets/img/icon/learning.png') }}" alt="Learning icon"></span>
                        </a>
                        <span class="mt-20"><img src="{{ asset('assets/img/icon/calling-icon.png') }}" alt="Phone icon"> +1 (415) 555‑0132</span>
                    </div>
                </div>
            </div>

            <div class="program-shape">
                <div class="shape shape--one">
                    <img data-parallax='{"x":-50,"y":-80}' src="{{ asset('assets/img/shape/book.png') }}" alt="Book shape">
                </div>
                <div class="shape shape--two">
                    <img data-parallax='{"x":-50,"y":-80}' src="{{ asset('assets/img/shape/camical.png') }}" alt="Camical shape">
                </div>
                <div class="shape shape--three">
                    <img data-parallax='{"x":50,"y":80}' src="{{ asset('assets/img/shape/pen.png') }}" alt="Pen shape">
                </div>
                <div class="shape shape--four">
                    <img data-parallax='{"x":50,"y":80}' src="{{ asset('assets/img/shape/stamp01.png') }}" alt="Stamp shape">
                </div>
            </div>
        </section>
        <!-- program section end -->

        <!-- campus section start  -->
        <section class="campus pos-rel bg_img z-1 pt-195 pb-200" data-background="{{ asset('assets/img/bg/campus-bg.jpg') }}">
            <div class="section-title mb-60 mt-80 text-center">
                <span class="sub-title">Our Campus Life</span>
                <h1 class="title">Our Campus Life</h1>
            </div>
            <div class="campus-slider mr-set">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="xb-campus__wrapper pos-rel">
                            <div class="xb-item--img pos-rel">
                                <img src="{{ asset('assets/img/campus/campus-img01.png') }}" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--title">Cultural Experiences</h3>
                                <div class="xb-btn_thm ul_li">
                                    <a class="thm-btn btn-yellow" href="#!">read more
                                        <span><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 0.999999C13 0.447714 12.5523 -1.14869e-06 12 -1.40157e-06L3 -6.00782e-07C2.44772 -9.37957e-07 2 0.447715 2 0.999999C2 1.55228 2.44772 2 3 2L11 2L11 10C11 10.5523 11.4477 11 12 11C12.5523 11 13 10.5523 13 10L13 0.999999ZM1.70711 12.7071L12.7071 1.70711L11.2929 0.292892L0.292893 11.2929L1.70711 12.7071Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="xb-campus__wrapper pos-rel">
                            <div class="xb-item--img pos-rel">
                                <img src="{{ asset('assets/img/campus/campus-img02.png') }}" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--title">Cultural Experiences</h3>
                                <div class="xb-btn_thm ul_li">
                                    <a class="thm-btn btn-yellow" href="#!">read more
                                        <span><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 0.999999C13 0.447714 12.5523 -1.14869e-06 12 -1.40157e-06L3 -6.00782e-07C2.44772 -9.37957e-07 2 0.447715 2 0.999999C2 1.55228 2.44772 2 3 2L11 2L11 10C11 10.5523 11.4477 11 12 11C12.5523 11 13 10.5523 13 10L13 0.999999ZM1.70711 12.7071L12.7071 1.70711L11.2929 0.292892L0.292893 11.2929L1.70711 12.7071Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="xb-campus__wrapper pos-rel">
                            <div class="xb-item--img pos-rel">
                                <img src="{{ asset('assets/img/campus/campus-img03.png') }}" alt="">
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--title">Cultural Experiences</h3>
                                <div class="xb-btn_thm ul_li">
                                    <a class="thm-btn btn-yellow" href="#!">read more
                                        <span><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 0.999999C13 0.447714 12.5523 -1.14869e-06 12 -1.40157e-06L3 -6.00782e-07C2.44772 -9.37957e-07 2 0.447715 2 0.999999C2 1.55228 2.44772 2 3 2L11 2L11 10C11 10.5523 11.4477 11 12 11C12.5523 11 13 10.5523 13 10L13 0.999999ZM1.70711 12.7071L12.7071 1.70711L11.2929 0.292892L0.292893 11.2929L1.70711 12.7071Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination ul_li_center"></div>
            </div>
         </section>
        <!-- campus section end  -->

        <!-- testimonial section start  -->
        <section class="testimonial pt-120 pb-120 pos-rel">
            <div class="container">
                <div class="row align-items-center mt-none-30">
                    <div class="col-lg-6 mt-30">
                        <div class="xb-testimonial-left pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration=".6s">
                            <div class="testimonial-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tes-img">
                                            <img src="{{ asset('assets/img/testimonial/tes-img.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tes-img">
                                            <img src="{{ asset('assets/img/testimonial/tes-img04.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tes-img">
                                            <img src="{{ asset('assets/img/testimonial/tes-img.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tes-img">
                                            <img src="{{ asset('assets/img/testimonial/tes-img04.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-slider-nav swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-nav-item">
                                            <img src="{{ asset('assets/img/testimonial/tes-img02.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-nav-item">
                                            <img src="{{ asset('assets/img/testimonial/tes-img03.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-nav-item">
                                            <img src="{{ asset('assets/img/testimonial/tes-img02.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-nav-item">
                                            <img src="{{ asset('assets/img/testimonial/tes-img03.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-carousel">
                                <div class="xb-swiper-arrow xb-swiper-arrow-next"><i class="far fa-angle-down"></i></div>
                                <div class="xb-swiper-arrow xb-swiper-arrow-prev"><i class="far fa-angle-up"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-30">
                        <div class="xb-testimonial-right wow fadeInRight" data-wow-delay="100ms" data-wow-duration=".6s">
                            <div class="section-title mb-70">
                                <span class="sub-title">Our Student Stories</span>
                                <h1 class="title">Happy Student Feedback</h1>
                            </div>
                            <div class="testimonial-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="xb-item--holder">
                                            <div class="xb-item--quote mb-35">
                                                <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                            </div>
                                            <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                expert faculty, practical learning experiences, and supportive community have
                                                prepared me well for my career. The campus life and top-notch facilities."</p>
                                        </div>
                                        <div class="xb-item--author mt-60">
                                            <span class="xb-item--name">Dr. William Harris</span>
                                            <span class="xb-item--desig">Dean of Humanities</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="xb-item--holder">
                                            <div class="xb-item--quote mb-35">
                                                <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                            </div>
                                            <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                expert faculty, practical learning experiences, and supportive community have
                                                prepared me well for my career. The campus life and top-notch facilities."</p>
                                        </div>
                                        <div class="xb-item--author mt-60">
                                            <span class="xb-item--name">Jessica Taylor</span>
                                            <span class="xb-item--desig">Student Council President</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="xb-item--holder">
                                            <div class="xb-item--quote mb-35">
                                                <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                            </div>
                                            <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                expert faculty, practical learning experiences, and supportive community have
                                                prepared me well for my career. The campus life and top-notch facilities."</p>
                                        </div>
                                        <div class="xb-item--author mt-60">
                                            <span class="xb-item--name">Ryan Stewart</span>
                                            <span class="xb-item--desig">IT Services Manager</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="xb-item--holder">
                                            <div class="xb-item--quote mb-35">
                                                <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                            </div>
                                            <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                expert faculty, practical learning experiences, and supportive community have
                                                prepared me well for my career. The campus life and top-notch facilities."</p>
                                        </div>
                                        <div class="xb-item--author mt-60">
                                            <span class="xb-item--name">Sarah Parker</span>
                                            <span class="xb-item--desig">Student Affairs Coordinator</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xb-tes-shape">
                <span class="shape shape--one"><img src="{{ asset('assets/img/shape/tes-shape.png') }}" alt=""></span>
                <span class="shape shape--two"><img src="{{ asset('assets/img/shape/tes-shape02.png') }}" alt=""></span>
            </div>
        </section>
        <!-- testimonial section end  -->

        <!-- event section start  -->
        <section class="event event-bg-clr pos-rel pt-115">
            <div class="container">
                <div class="section-title text-center mb-40">
                    <span class="sub-title">Our Events</span>
                    <h1 class="title">Our upcoming events</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="xb-event-wrapper mt-20">
                            <div class="xb-event-left ul_li align-items-center">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/event/event-img01.png') }}" alt="">
                                    <span class="xb-item--date">24, Nov 2024</span>
                                </div>
                                <div class="xb-item--author">
                                    <span class="xb-item--location">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 11.1917C11.436 11.1917 12.6 10.0276 12.6 8.5917C12.6 7.15576 11.436 5.9917 10 5.9917C8.56408 5.9917 7.40002 7.15576 7.40002 8.5917C7.40002 10.0276 8.56408 11.1917 10 11.1917Z" stroke="#292D32" stroke-width="1.5" />
                                        <path d="M3.01663 7.07484C4.65829 -0.141827 15.35 -0.133494 16.9833 7.08317C17.9416 11.3165 15.3083 14.8998 13 17.1165C11.325 18.7332 8.67496 18.7332 6.99163 17.1165C4.69163 14.8998 2.05829 11.3082 3.01663 7.07484Z" stroke="#292D32" stroke-width="1.5" />
                                        </svg> 139 W, 46th Street, New York.
                                    </span>
                                    <h2 class="xb-item--title border-effect"><a href="event-single.html">Celebrating Diversity through Art and Performance..</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="xb-event-wrapper mt-20">
                            <div class="xb-event-left ul_li align-items-center">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/event/event-img02.png') }}" alt="">
                                    <span class="xb-item--date">24, Nov 2024</span>
                                </div>
                                <div class="xb-item--author">
                                    <span class="xb-item--location">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 11.1917C11.436 11.1917 12.6 10.0276 12.6 8.5917C12.6 7.15576 11.436 5.9917 10 5.9917C8.56408 5.9917 7.40002 7.15576 7.40002 8.5917C7.40002 10.0276 8.56408 11.1917 10 11.1917Z" stroke="#292D32" stroke-width="1.5" />
                                        <path d="M3.01663 7.07484C4.65829 -0.141827 15.35 -0.133494 16.9833 7.08317C17.9416 11.3165 15.3083 14.8998 13 17.1165C11.325 18.7332 8.67496 18.7332 6.99163 17.1165C4.69163 14.8998 2.05829 11.3082 3.01663 7.07484Z" stroke="#292D32" stroke-width="1.5" />
                                        </svg> New York, NY 10036, USA.
                                    </span>
                                    <h2 class="xb-item--title border-effect"><a href="event-single.html">Global Perspectives Bridging Cultures, Shaping Futures..</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="xb-event-wrapper pos-rel mt-20">
                            <div class="xb-event-left ul_li align-items-center">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/event/event-img03.png') }}" alt="">
                                    <span class="xb-item--date">24, Nov 2024</span>
                                </div>
                                <div class="xb-item--author">
                                    <span class="xb-item--location">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 11.1917C11.436 11.1917 12.6 10.0276 12.6 8.5917C12.6 7.15576 11.436 5.9917 10 5.9917C8.56408 5.9917 7.40002 7.15576 7.40002 8.5917C7.40002 10.0276 8.56408 11.1917 10 11.1917Z" stroke="#292D32" stroke-width="1.5" />
                                        <path d="M3.01663 7.07484C4.65829 -0.141827 15.35 -0.133494 16.9833 7.08317C17.9416 11.3165 15.3083 14.8998 13 17.1165C11.325 18.7332 8.67496 18.7332 6.99163 17.1165C4.69163 14.8998 2.05829 11.3082 3.01663 7.07484Z" stroke="#292D32" stroke-width="1.5" />
                                        </svg> New York, NY 10036, USA.
                                    </span>
                                    <h2 class="xb-item--title border-effect"><a href="event-single.html">Throw an event to kick off a mentorship program..</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="xb-event-item mt-20">
                            <div class="xb-item--img">
                                <img src="{{ asset('assets/img/event/event-img04.png') }}" alt="">
                            </div>
                            <div class="ul_li xb-item--wrap">
                                <div class="xb-item--content">
                                    <span class="xb-item--location">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 11.1917C11.436 11.1917 12.6 10.0276 12.6 8.5917C12.6 7.15576 11.436 5.9917 10 5.9917C8.56408 5.9917 7.40002 7.15576 7.40002 8.5917C7.40002 10.0276 8.56408 11.1917 10 11.1917Z" stroke="#292D32" stroke-width="1.5" />
                                        <path d="M3.01663 7.07484C4.65829 -0.141827 15.35 -0.133494 16.9833 7.08317C17.9416 11.3165 15.3083 14.8998 13 17.1165C11.325 18.7332 8.67496 18.7332 6.99163 17.1165C4.69163 14.8998 2.05829 11.3082 3.01663 7.07484Z" stroke="#292D32" stroke-width="1.5" />
                                        </svg>46th Street, Financial District, New York
                                    </span>
                                    <h2 class="xb-item--title border-effect"><a href="event-single.html">Hongbo Chi, Ph.D., Integrating systems immunology with..</a></h2>
                                    <div class="xb-event-btn pt-15">
                                        <a class="thm-btn" href="event-single.html">get a tickets
                                            <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z" fill="#170006" />
                                              </svg></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="xb-item--date-inner text-center">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/note-book.svg') }}" alt="">
                                    </div>
                                    <span class="xb-item--date">24, Dec <br> 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-btns pos-rel z-1 text-center mt-40">
                        <a class="more-btn" href="event.html">view more events
                            <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z" fill="#170006" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="xb-event-bottom">
                <img src="{{ asset('assets/img/event/event-img05.png') }}" alt="">
            </div>
            <div class="event-shape">
                <div class="shape shape--one">
                    <img data-parallax='{"x":-50,"y":-80}' src="{{ asset('assets/img/shape/stamp.png') }}" alt="">
                </div>
                <div class="shape shape--two">
                    <img src="{{ asset('assets/img/shape/Union.png') }}" alt="">
                </div>
            </div>
         </section>
        <!-- event section end  -->

    </main>

    <!-- footer strt -->
    <footer class="footer bg_img pos-rel pt-20" data-background="{{ asset('assets/img/bg/footer-bg.jpg') }}">
        <div class="xb-footer-wrap">
            <div class="container">
                <div class="footer-cta ul_li_between mb-35">
                    <div class="xb-item--holder ul_li mt-30">
                        <div class="xb-item--icon-avatar ul_li">
                            <span><img src="{{ asset('assets/img/icon/calling-icon01.png') }}" alt=""></span>
                            <div class="xb-item--avatar">
                                <img src="{{ asset('assets/img/footer/footer-avatar.png') }}" alt="">
                            </div>
                        </div>
                        <div class="xb-item--content">
                            If you have questions, order a free conversation <br> with our consultant.
                        </div>
                    </div>
                    <div class="xb-item--contact mt-30">
                        <span>or use our hotline 24h</span>
                        <h3>+1 (415) 555‑0132</h3>
                    </div>
                </div>
            </div>
            <div class="xb-footer-main pt-70 pb-60">
                <div class="container">
                    <div class="row mt-none-30">
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="footer-widget mt-10">
                                <div class="xb-item--logo mb-30"><a href="#!"><img
                                            src="{{ asset('assets/img/logo/logo_white.svg') }}" alt=""></a></div>
                                <span class="xb-item--details">25/1, N.I.A. Post Office, Balewadi, <br> Bristol – BS1 5TA,
                                    England, <br> United Kingdom</span>
                                <div class="xb-item--meta mt-20">
                                    <span>Social media</span>
                                    <ul class="xb-item--social_link ul_li">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.52217 6.77491L15.4785 0H14.0671L8.89516 5.88256L4.76437 0H0L6.24656 8.89547L0 16H1.41155L6.87321 9.78782L11.2356 16H16L9.52183 6.77491H9.52217ZM7.58887 8.97384L6.95596 8.08805L1.92015 1.03974H4.0882L8.15216 6.72795L8.78507 7.61374L14.0677 15.0075H11.8997L7.58887 8.97418V8.97384Z"
                                                        fill="white" />
                                                </svg></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 mt-30">
                            <div class="footer-widget">
                                <h3 class="xb-item--title">Admissions</h3>
                                <ul class="xb-item--links list-unstyled">
                                    <li><a href="#!">How to apply</a></li>
                                    <li><a href="#!">Schedule</a></li>
                                    <li><a href="#!">Procedure</a></li>
                                    <li><a href="#!">Eligibility</a></li>
                                    <li><a href="#!">Fee structure</a></li>
                                    <li><a href="#!">Scholarships</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 mt-30">
                            <div class="footer-widget chng-mr">
                                <h3 class="xb-item--title">Quick Links</h3>
                                <ul class="xb-item--links list-unstyled">
                                    <li><a href="#!">Press & Media</a></li>
                                    <li><a href="#!">Alumni Portal</a></li>
                                    <li><a href="#!">Newsletters</a></li>
                                    <li><a href="#!">Departments</a></li>
                                    <li><a href="#!">People Directory</a></li>
                                    <li><a href="#!">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="footer-widget change-mr">
                                <h3 class="xb-item--title">Additional Links</h3>
                                <ul class="xb-item--links list-unstyled">
                                    <li><a href="#!">Open House</a></li>
                                    <li><a href="#!">Summer School</a></li>
                                    <li><a href="#!">ICCRIP 2024</a></li>
                                    <li><a href="#!">WIC Forum</a></li>
                                    <li><a href="#!">Placements</a></li>
                                    <li><a href="#!">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 mt-30">
                            <div class="footer-widget">
                                <ul class="xb-item--links-btn list-unstyled">
                                    <li><a class="thm-btn" href="#!">applying</a></li>
                                    <li><a class="thm-btn" href="#!">visiting</a></li>
                                    <li><a class="thm-btn" href="#!">careers</a></li>
                                    <li><a class="thm-btn" href="#!">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25">
                <div class="copyright text-center">
                    <p>Copyright © {{ date('Y') }} <a href="{{ route('home') }}">Edubost</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

    <!-- jquery include -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

    </body>
</html>
