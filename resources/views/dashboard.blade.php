<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Welcome! You're logged in.</h3>
                    
                    <h4 class="text-md font-semibold mt-6">Navigation Links</h4>
                    <ul class="list-disc ml-6">
                        <!-- Authentication Links -->
                        <li><a href="{{ route('auth.login') }}" class="text-blue-500 hover:underline">Login</a></li>
                        <li><a href="{{ route('auth.register') }}" class="text-blue-500 hover:underline">Register</a></li>
                        <li><a href="{{ route('auth.lock-screen') }}" class="text-blue-500 hover:underline">Lock Screen</a></li>
                        <li><a href="{{ route('auth.recoverpw') }}" class="text-blue-500 hover:underline">Recover Password</a></li>

                        <!-- Calendar and Chat -->
                        <li><a href="{{ route('calendar') }}" class="text-blue-500 hover:underline">Calendar</a></li>
                        <li><a href="{{ route('chat') }}" class="text-blue-500 hover:underline">Chat</a></li>

                        <!-- Charts -->
                        <li><a href="{{ route('charts.apex') }}" class="text-blue-500 hover:underline">Charts (Apex)</a></li>
                        <li><a href="{{ route('charts.chartist') }}" class="text-blue-500 hover:underline">Charts (Chartist)</a></li>
                        <li><a href="{{ route('charts.chartjs') }}" class="text-blue-500 hover:underline">Charts (ChartJS)</a></li>
                        <li><a href="{{ route('charts.flot') }}" class="text-blue-500 hover:underline">Charts (Flot)</a></li>
                        <li><a href="{{ route('charts.knob') }}" class="text-blue-500 hover:underline">Charts (Knob)</a></li>
                        <li><a href="{{ route('charts.sparkline') }}" class="text-blue-500 hover:underline">Charts (Sparkline)</a></li>

                        <!-- E-commerce -->
                        <li><a href="{{ route('ecommerce.add-product') }}" class="text-blue-500 hover:underline">Add Product</a></li>
                        <li><a href="{{ route('ecommerce.cart') }}" class="text-blue-500 hover:underline">Cart</a></li>
                        <li><a href="{{ route('ecommerce.checkout') }}" class="text-blue-500 hover:underline">Checkout</a></li>
                        <li><a href="{{ route('ecommerce.customers') }}" class="text-blue-500 hover:underline">Customers</a></li>
                        <li><a href="{{ route('ecommerce.orders') }}" class="text-blue-500 hover:underline">Orders</a></li>
                        <li><a href="{{ route('ecommerce.product-detail') }}" class="text-blue-500 hover:underline">Product Detail</a></li>
                        <li><a href="{{ route('ecommerce.products') }}" class="text-blue-500 hover:underline">Products</a></li>
                        <li><a href="{{ route('ecommerce.shops') }}" class="text-blue-500 hover:underline">Shops</a></li>

                        <!-- Email -->
                        <li><a href="{{ route('email.compose') }}" class="text-blue-500 hover:underline">Compose Email</a></li>
                        <li><a href="{{ route('email.inbox') }}" class="text-blue-500 hover:underline">Inbox</a></li>
                        <li><a href="{{ route('email.read') }}" class="text-blue-500 hover:underline">Read Email</a></li>

                        <!-- Forms -->
                        <li><a href="{{ route('forms.advanced') }}" class="text-blue-500 hover:underline">Advanced Forms</a></li>
                        <li><a href="{{ route('forms.editors') }}" class="text-blue-500 hover:underline">Editors</a></li>
                        <li><a href="{{ route('forms.elements') }}" class="text-blue-500 hover:underline">Form Elements</a></li>

                        <li><a href="{{ route('forms.mask') }}" class="text-blue-500 hover:underline">Form Mask</a></li>
                        <li><a href="{{ route('forms.uploads') }}" class="text-blue-500 hover:underline">File Uploads</a></li>
                        <li><a href="{{ route('forms.validation') }}" class="text-blue-500 hover:underline">Form Validation</a></li>
                        <li><a href="{{ route('forms.wizard') }}" class="text-blue-500 hover:underline">Form Wizard</a></li>
                        <li><a href="{{ route('forms.xeditable') }}" class="text-blue-500 hover:underline">XEditable Forms</a></li>

                        <!-- Icons -->
                        <li><a href="{{ route('icons.dripicons') }}" class="text-blue-500 hover:underline">Dripicons</a></li>
                        <li><a href="{{ route('icons.fontawesome') }}" class="text-blue-500 hover:underline">Font Awesome Icons</a></li>
                        <li><a href="{{ route('icons.materialdesign') }}" class="text-blue-500 hover:underline">Material Design Icons</a></li>
                        <li><a href="{{ route('icons.themify') }}" class="text-blue-500 hover:underline">Themify Icons</a></li>

                        <!-- Misc Pages -->
                        <li><a href="{{ route('pages.404') }}" class="text-blue-500 hover:underline">404 Page</a></li>
                        <li><a href="{{ route('pages.500') }}" class="text-blue-500 hover:underline">500 Page</a></li>
                        <li><a href="{{ route('pages.blank') }}" class="text-blue-500 hover:underline">Blank Page</a></li>
                        <li><a href="{{ route('pages.coming-soon') }}" class="text-blue-500 hover:underline">Coming Soon</a></li>
                        <li><a href="{{ route('pages.faq') }}" class="text-blue-500 hover:underline">FAQ</a></li>
                        <li><a href="{{ route('pages.invoice') }}" class="text-blue-500 hover:underline">Invoice</a></li>
                        <li><a href="{{ route('pages.maintenance') }}" class="text-blue-500 hover:underline">Maintenance</a></li>
                        <li><a href="{{ route('pages.pricing') }}" class="text-blue-500 hover:underline">Pricing</a></li>
                        <li><a href="{{ route('pages.timeline') }}" class="text-blue-500 hover:underline">Timeline</a></li>

                        <!-- Tables -->
                        <li><a href="{{ route('tables.basic') }}" class="text-blue-500 hover:underline">Basic Tables</a></li>
                        <li><a href="{{ route('tables.datatable') }}" class="text-blue-500 hover:underline">Data Tables</a></li>
                        <li><a href="{{ route('tables.editable') }}" class="text-blue-500 hover:underline">Editable Tables</a></li>
                        <li><a href="{{ route('tables.responsive') }}" class="text-blue-500 hover:underline">Responsive Tables</a></li>

                        <!-- UI Components -->
                        <li><a href="{{ route('ui.alerts') }}" class="text-blue-500 hover:underline">Alerts</a></li>
                        <li><a href="{{ route('ui.buttons') }}" class="text-blue-500 hover:underline">Buttons</a></li>
                        <li><a href="{{ route('ui.cards') }}" class="text-blue-500 hover:underline">Cards</a></li>
                        <li><a href="{{ route('ui.carousel') }}" class="text-blue-500 hover:underline">Carousel</a></li>
                        <li><a href="{{ route('ui.modals') }}" class="text-blue-500 hover:underline">Modals</a></li>
                        <li><a href="{{ route('ui.typography') }}" class="text-blue-500 hover:underline">Typography</a></li>
                        <li><a href="{{ route('ui.video') }}" class="text-blue-500 hover:underline">Video</a></li>

                        <!-- Profile -->
                        <li><a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline">Edit Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
