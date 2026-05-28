@extends('components.layout')

@section('title')
    Contact | Talpari Anadu
@endsection

@section('content')
<!-- Contact Page Section -->
<section class="w-full py-12 md:py-16">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        
        <!-- Header Section -->
        <div class="mb-12 max-w-3xl">
            <span class="text-xs font-semibold uppercase tracking-widest text-gray-400 block mb-2">Connect With Us</span>
            <h1 class="text-3xl md:text-4xl font-serif font-bold tracking-tight mb-4">Contact the Community</h1>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                Whether you are a community member, a researcher, an environmental organization, or a visitor, we welcome your inquiries. Reach out to our village representatives directly.
            </p>
        </div>

        <!-- Two-Column Layout -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-12 pt-8 border-t border-gray-200">
            
            <!-- Left Side: Directory & Location (Takes up 2/5 space) -->
            <div class="md:col-span-2 space-y-8">
                
                <!-- Institutional Contacts -->
                <div>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider mb-3">Institutional Liaisons</span>
                    <ul class="space-y-6 text-sm">
                        <li>
                            <strong class="font-serif text-base text-gray-900 block">Anadu Tol Bikas Sanstha</strong>
                            <span class="text-gray-500 text-xs block mb-1">Civic &amp; Development Affairs</span>
                            <span class="text-gray-900 font-medium block">Dipendra Gurung</span>
                            <span class="text-gray-600 font-mono">Mob: 9856041419</span>
                        </li>
                        <li>
                            <strong class="font-serif text-base text-gray-900 block">Taalpari Anadu Gurung Samaaj</strong>
                            <span class="text-gray-500 text-xs block mb-1">Cultural &amp; Heritage Preservation</span>
                            <span class="text-gray-900 font-medium block">Prakash Gurung</span>
                            <span class="text-gray-600 font-mono">Mob: 9846025557</span>
                        </li>
                    </ul>
                </div>

                <!-- Geographic Location Details -->
                <div class="pt-4 border-t border-gray-100">
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Pokhara - 22, Taalpari Anadu<br>
                        Gandaki Province, Nepal
                    </p>
                    <span class="text-[11px] text-gray-500 block mt-2">
                        Accessible primarily via a 20-30 min boat transit or a 2-hour trek along the Raniban Eco-Trail.
                    </span>
                </div>

            </div>

            <!-- Right Side: Contact Form (Takes up 3/5 space) -->
            <div class="md:col-span-3">
                <form action="#" method="POST" class="space-y-5">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-xs font-mono text-gray-400 uppercase mb-1">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full text-sm border-b border-gray-300 py-2 focus:outline-none focus:border-gray-900 bg-transparent text-gray-900" placeholder="Your name" required>
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-mono text-gray-400 uppercase mb-1">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full text-sm border-b border-gray-300 py-2 focus:outline-none focus:border-gray-900 bg-transparent text-gray-900" placeholder="yourname@email.com" required>
                        </div>
                    </div>

                    <div>
                        <label for="purpose" class="block text-xs font-mono text-gray-400 uppercase mb-1">Purpose of Inquiry</label>
                        <select id="purpose" name="purpose" class="w-full text-sm border-b border-gray-300 py-2 focus:outline-none focus:border-gray-900 bg-transparent text-gray-600">
                            <option value="general">General Inquiry</option>
                            <option value="culture">Cultural Research &amp; Documentation</option>
                            <option value="environmental">Volunteer / Lake Cleanup Collaboration</option>
                            <option value="diaspora">Diaspora Connection</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-xs font-mono text-gray-400 uppercase mb-1">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full text-sm border-b border-gray-300 py-2 focus:outline-none focus:border-gray-900 bg-transparent text-gray-900 resize-none" placeholder="Write your message here..." required></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="border border-gray-900 text-gray-900 text-xs uppercase tracking-wider font-semibold px-6 py-2.5 hover:bg-gray-900 hover:text-white transition-colors duration-200">
                            Send Message
                        </button>
                    </div>

                </form>
            </div>

        </div>

    </div>
</section>
@endsection
