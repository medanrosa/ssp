<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold text-center mb-6">User Subscription Analytics</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-center mb-4">Free Plan Users</h3>
                <p class="text-5xl text-center font-bold">{{ $freeUsersCount }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-center mb-4">Premium Plan Users</h3>
                <p class="text-5xl text-center font-bold">{{ $premiumUsersCount }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
