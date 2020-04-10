@extends('layouts.app')

@section('title', 'Settings')

@section('content')

    <div
        x-data="{ current_tab: window.location.hash.replace('#', '') || 'general' }"
        class="container mx-auto max-w-3xl mt-8">

        <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Settings</h1>

        <ul class="flex border-b border-gray-300 text-sm font-medium text-gray-600 mt-3 px-6 md:px-0">
            <li
                class="mr-8 hover:text-gray-900"
                :class="{'text-gray-900 border-b-2 border-gray-800': current_tab === 'general'}">
                <a
                    href="#general"
                    @click="current_tab = 'general'"
                    class="py-4 inline-block">General Settings</a>
            </li>
            <li
                class="mr-8 hover:text-gray-900"
                :class="{'text-gray-900 border-b-2 border-gray-800': current_tab === 'security'}">
                <a
                    href="#security"
                    @click="current_tab = 'security'"
                    class="py-4 inline-block">Security</a>
            </li>
            <li
                class="mr-8 hover:text-gray-900"
                :class="{'text-gray-900 border-b-2 border-gray-800': current_tab === 'billing'}">
                <a
                    href="#billing"
                    @click="current_tab = 'billing'"
                    class="py-4 inline-block">Billing</a>
            </li>
        </ul>

        <div
            x-show="current_tab === 'general'"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="transform ease-in-out duration-300">

            @include('settings.general')

        </div>


        <div
            x-show="current_tab === 'security'"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="transform ease-in-out duration-300">

            @include('settings.security')

        </div>

        <div
            x-show="current_tab === 'billing'"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="transform ease-in-out duration-300">

            @include('settings.billing')

        </div>
    </div>
@endsection
