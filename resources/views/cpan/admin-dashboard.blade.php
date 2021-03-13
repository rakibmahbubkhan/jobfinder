@extends('layouts.layout')

@section('content')
<div class="font-font-sans bg-gray-100 bg-opacity-75">
  
  <div class="min-h-screen flex">
    <div class="w-64 bg-gray-200 bg-opacity-50 hidden lg:block border-r border-gray-300">
      <div class="p-4"><a class="p-2 bg-gray-300 flex items-center rounded text-sm text-gray-700"><svg class="w-4 mr-2 text-gray-500" viewBox="0 0 512 512">
            <defs></defs>
            <path d="M104 160a56 56 0 1156-56 56.06 56.06 0 01-56 56zm152 0a56 56 0 1156-56 56.06 56.06 0 01-56 56zm152 0a56 56 0 1156-56 56.06 56.06 0 01-56 56zM104 312a56 56 0 1156-56 56.06 56.06 0 01-56 56zm152 0a56 56 0 1156-56 56.06 56.06 0 01-56 56zm152 0a56 56 0 1156-56 56.06 56.06 0 01-56 56zM104 464a56 56 0 1156-56 56.06 56.06 0 01-56 56zm152 0a56 56 0 1156-56 56.06 56.06 0 01-56 56zm152 0a56 56 0 1156-56 56.06 56.06 0 01-56 56z" fill="currentColor"></path>
          </svg>
          <div>Dashboard</div>
        </a>
        <a class="p-2 flex items-center rounded text-sm text-gray-600 mt-2"><svg class="w-4 mr-2 text-gray-500" viewBox="0 0 512 512">
            <defs></defs>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"></path>
          </svg>
          <div>Sales orders</div>
        </a>
        <a class="p-2 flex items-center rounded text-sm text-gray-600 mt-2"><svg class="w-4 mr-2 text-gray-500" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" fill="currentColor"></path>
            <circle cx="9" cy="7" r="4" fill="currentColor"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75" fill="currentColor"></path>
          </svg>
          <div>Customers</div>
        </a>
        <a class="p-2 flex items-center rounded text-sm text-gray-600 mt-2"><svg class="w-4 mr-2 text-gray-500" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" fill="currentColor"></path>
            <circle cx="8.5" cy="7" r="4" fill="currentColor"></circle>
            <path d="M17 11l2 2 4-4" fill="currentColor"></path>
          </svg>
          <div>Leads</div>
        </a>
        <a class="p-2 flex items-center rounded text-sm text-gray-600 mt-2"><svg class="w-4 mr-2 text-gray-500" viewBox="0 0 512 512">
            <defs></defs>
            <path d="M428 224H288a48 48 0 01-48-48V36a4 4 0 00-4-4h-92a64 64 0 00-64 64v320a64 64 0 0064 64h224a64 64 0 0064-64V228a4 4 0 00-4-4zm-92 160H176a16 16 0 010-32h160a16 16 0 010 32zm0-80H176a16 16 0 010-32h160a16 16 0 010 32z" fill="currentColor"></path>
            <path d="M419.22 188.59L275.41 44.78a2 2 0 00-3.41 1.41V176a16 16 0 0016 16h129.81a2 2 0 001.41-3.41z" fill="currentColor"></path>
          </svg>
          <div>Resources</div>
        </a>
        <a class="p-2 flex items-center rounded text-sm text-gray-600 mt-2"><svg class="w-4 mr-2 text-gray-500" viewBox="0 0 512 512">
            <defs></defs>
            <path d="M256 176a80 80 0 1080 80 80.24 80.24 0 00-80-80zm172.72 80a165.53 165.53 0 01-1.64 22.34l48.69 38.12a11.59 11.59 0 012.63 14.78l-46.06 79.52a11.64 11.64 0 01-14.14 4.93l-57.25-23a176.56 176.56 0 01-38.82 22.67l-8.56 60.78a11.93 11.93 0 01-11.51 9.86h-92.12a12 12 0 01-11.51-9.53l-8.56-60.78A169.3 169.3 0 01151.05 393L93.8 416a11.64 11.64 0 01-14.14-4.92L33.6 331.57a11.59 11.59 0 012.63-14.78l48.69-38.12A174.58 174.58 0 0183.28 256a165.53 165.53 0 011.64-22.34l-48.69-38.12a11.59 11.59 0 01-2.63-14.78l46.06-79.52a11.64 11.64 0 0114.14-4.93l57.25 23a176.56 176.56 0 0138.82-22.67l8.56-60.78A11.93 11.93 0 01209.94 26h92.12a12 12 0 0111.51 9.53l8.56 60.78A169.3 169.3 0 01361 119l57.2-23a11.64 11.64 0 0114.14 4.92l46.06 79.52a11.59 11.59 0 01-2.63 14.78l-48.69 38.12a174.58 174.58 0 011.64 22.66z" fill="currentColor"></path>
          </svg>
          <div>Settings</div>
        </a></div>
    </div>
    <div class="flex flex-col flex-1">
      <div class="p-4 border-b border-gray-300 bg-white">
        <div class="text-2xl font-normal tracking-wide">Dashboard</div>
      </div>
      <div class="p-6 container">
        <div class="grid grid-cols-2 gap-4 md:grid md:grid-cols-3 lg:grid lg:grid-cols-4">
          <div class="p-4 border border-gray-400 shadow-md bg-white">
            <div class="text-sm font-thin text-gray-500">Today's Orders</div>
            <div class="text-xl font-semibold truncate leading-none lg:text-3xl mt-2 mb-4 text-gray-800 group-hover:text-gray-100">sdsd</div>
            <div class="relative mt-2">
              <div class="bg-gray-300 h-2 rounded-full"></div>
              <div class="absolute top-0 w-1/6 bg-indigo-600 h-full rounded-lg"></div>
            </div>
            <div class="flex justify-between">
              <div class="text-xs text-right text-gray-400">14%</div>
              <div class="text-xs text-right text-gray-400">$25,000</div>
            </div>
          </div>
          <div class="p-4 shadow bg-indigo-700">
            <div class="text-sm font-light text-indigo-100">Today's Orders</div>
            <div class="text-xl font-semibold leading-none lg:text-3xl my-2 text-indigo-100">$1420</div>
            <div class="relative mt-2">
              <div class="bg-gray-300 h-2 rounded-full"></div>
              <div class="absolute top-0 w-8/12 bg-indigo-900 h-full rounded-lg"></div>
            </div>
            <div class="flex justify-between text-indigo-300">
              <div class="text-xs text-right">78%</div>
              <div class="text-xs text-right">$25,000</div>
            </div>
          </div>
          <div class="p-4 border-1 border-gray-400 shadow bg-red-500">
            <div class="text-sm font-light text-indigo-100">Today's Orders</div>
            <div class="text-xl font-semibold leading-none lg:text-3xl mt-2 mb-4 text-indigo-100">$1420</div>
            <div class="relative mt-2">
              <div class="bg-gray-300 h-2 rounded-full"></div>
              <div class="absolute top-0 w-8/12 bg-red-700 h-full rounded-lg"></div>
            </div>
            <div class="flex justify-between text-red-100">
              <div class="text-xs text-right">78%</div>
              <div class="text-xs text-right">$25,000</div>
            </div>
          </div>
          <div class="p-4 shadow bg-gray-900 text-gray-100 md:col-span-3 lg:col-span-1">
            <div class="text-sm font-light text-gray-200">Today's Orders</div>
            <div class="text-xl font-semibold leading-none lg:text-3xl mt-2 mb-4 text-gray-100">$1420</div>
            <div class="relative mt-2">
              <div class="bg-gray-100 h-2 rounded-full"></div>
              <div class="absolute top-0 w-1/6 bg-gray-700 h-full rounded-lg"></div>
            </div>
            <div class="flex justify-between">
              <div class="text-xs text-right text-gray-500">14%</div>
              <div class="text-xs text-right text-gray-500">$25,000</div>
            </div>
          </div>
        </div>
        <div class="mt-6 grid gap-6 lg:grid lg:grid-cols-2">
          <div>
            <div class="text-lg text-gray-700 mb-2">Latest users</div>
            <div class="border border-gray-400 shadow-sm bg-white rounded-lg divide-y divide-gray-400"><a class="flex items-center p-2">
                <div class="text-sm font-thin bg-pink-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MH</div>
                <div class="ml-2">
                  <div class="text-gray-700">Apply new Changes</div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-pink-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MH</div>
                <div class="ml-2">
                  <div class="text-gray-700">Apply new Changes</div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-pink-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MH</div>
                <div class="ml-2">
                  <div class="text-gray-700">Apply new Changes</div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-pink-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MH</div>
                <div class="ml-2">
                  <div class="text-gray-700">Apply new Changes</div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-pink-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MH</div>
                <div class="ml-2">
                  <div class="text-gray-700">Apply new Changes</div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-pink-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MH</div>
                <div class="ml-2">
                  <div class="text-gray-700">Apply new Changes</div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a></div>
          </div>
          <div>
            <div class="mb-6">
              <div class="text-lg text-gray-700 mb-2">Add new task</div>
              <div class="relative"><input class="w-full bg-white px-10 placeholder-gray-500 placeholder-opacity-75 outline-none rounded-lg text-base border border-gray-400 h-12 shadow-sm focus:shadow-outline" type="text" placeholder="Task title" />
                <div class="absolute top-0 left-0 w-12 h-12 flex items-center justify-center">
                  <div class="w-6 h-6 bg-indigo-700 rounded-full border-2 border-gray-200 flex items-center justify-center text-gray-100"><svg class="w-3" viewBox="0 0 48 48">
                      <defs></defs>
                      <path d="M18 32.465l-12-12L2.464 24 18 39.535 45.536 12 42 8.465z" fill="currentColor"></path>
                    </svg></div>
                </div>
              </div>
              <div class="mt-4 flex items-center"><button class="outline-none p-3 py-2 bg-indigo-600 rounded-lg text-gray-100 shadow">
                  <div class="text-sm text-center uppercase">Add new task</div>
                </button>
                <a class="ml-6 text-sm underline text-gray-500">
                  <div>View all tasks</div>
                </a></div>
            </div>
            <div class="border border-gray-400 shadow-sm bg-white rounded-lg divide-y divide-gray-400"><a class="flex items-center p-2">
                <div class="text-sm font-thin bg-blue-400 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">SK</div>
                <div class="ml-2">
                  <div class="flex items-center">
                    <div class="line-through text-gray-700">UI Release v1.2</div>
                    <div class="text-xs uppercase ml-2 bg-green-500 text-white px-2 rounded-full">Release</div>
                  </div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Mohammad karmi</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-blue-400 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">SK</div>
                <div class="ml-2">
                  <div class="line-through text-gray-700">New IOS Release</div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Qays inad</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-purple-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MK</div>
                <div class="ml-2">
                  <div class="flex items-center">
                    <div class="line-through text-gray-700">UI Release v1.2</div>
                    <div class="text-xs uppercase ml-2 bg-green-500 text-white px-2 rounded-full">FEATURE</div>
                  </div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a>
              <a class="flex items-center p-2">
                <div class="text-sm font-thin bg-pink-500 h-8 rounded-full w-8 flex items-center justify-center text-gray-100">MH</div>
                <div class="ml-2">
                  <div class="flex items-center">
                    <div class="text-gray-700">Page not opening</div>
                    <div class="text-xs uppercase ml-2 bg-red-600 text-white px-2 rounded-full">BUG</div>
                  </div>
                  <div class="flex items-center">
                    <div class="flex items-center"><img class="object-cover w-5 h-5 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
                      <div class="text-xs text-gray-500">Solaiman Kmail</div>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full mx-2"></div>
                    <div class="text-xs text-gray-500">3 minutes ago</div>
                  </div>
                </div>
              </a></div>
          </div>
        </div>
        <div class="bg-white shadow-md rounded-lg border border-gray-400 mt-6">
          <div class="text-xl text-gray-700 p-4 border-b border-gray-300">Form layout</div>
          <div class="border border-red-300 rounded-lg bg-red-400 bg-opacity-25 p-4 flex text-red-700 shadow-sm m-6 mb-2">
            <div><svg class="w-6 mr-2" viewBox="0 0 512 512">
                <defs></defs>
                <path d="M256 56C145.72 56 56 145.72 56 256s89.72 200 200 200 200-89.72 200-200S366.28 56 256 56zm0 82a26 26 0 11-26 26 26 26 0 0126-26zm48 226h-88a16 16 0 010-32h28v-88h-16a16 16 0 010-32h32a16 16 0 0116 16v104h28a16 16 0 010 32z" fill="currentColor"></path>
              </svg></div>
            <div>
              <div class="text-sm font-semibold">Your form's data is invalid</div>
              <div class="text-sm font-light">Check your form fields for error messages</div>
            </div>
          </div>
          <div>
            <div class="divide-y divide-gray-400">
              <div>
                <div class="py-4 px-6">
                  <div class="text-sm w-2/6 text-gray-700">Full name</div>
                  <div><input class="w-full md:w-1/2 lg:w-2/3 bg-white px-4 placeholder-gray-500 placeholder-opacity-75 outline-none rounded-lg text-base border border-gray-400 h-10 shadow-sm focus:shadow-outline" type="text" />
                    <div class="text-xs mt-2 text-gray-500">This field is required.</div>
                  </div>
                </div>
              </div>
              <div class="py-4 px-6">
                <div class="text-sm w-2/6 text-gray-700">Email address</div>
                <div><input class="w-full md:w-1/2 lg:w-2/3 bg-white px-4 placeholder-gray-500 placeholder-opacity-75 outline-none rounded-lg text-sm border border-gray-400 h-10 shadow-sm" type="text" placeholder="e.g: psokmail@gmail.com" />
                  <div class="text-xs mt-2 text-gray-500">This field is required.</div>
                </div>
              </div>
              <div class="py-4 px-6">
                <div class="text-sm lg:w-2/6 text-gray-600 mb-2 lg:mb-0">Subscribe to newsletter</div>
                <div>
                  <div class="flex items-center mb-2">
                    <div class="w-5 h-5 bg-white border-2 border-gray-400 rounded"></div>
                    <div class="text-sm leading-tight ml-2 text-gray-500">Receive daily updates.</div>
                  </div>
                  <div class="flex items-center mb-2">
                    <div class="w-5 h-5 bg-indigo-700 border-2 border-indigo-700 rounded text-gray-100 flex items-center justify-center"><svg class="w-5" viewBox="0 0 512 512">
                        <defs></defs>
                        <path fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="44" d="M416 128L192 384l-96-96"></path>
                      </svg></div>
                    <div class="text-sm leading-tight ml-2 text-gray-500">Receive weekly updates.</div>
                  </div>
                  <div class="flex items-center mb-2">
                    <div class="w-5 h-5 bg-white border-2 border-gray-400 rounded"></div>
                    <div class="text-sm leading-tight ml-2 text-gray-500">Receive Monthly updates.</div>
                  </div>
                </div>
              </div>
              <div class="p-6 py-4 bg-gray-100 bg-opacity-75 flex items-center justify-between rounded-bl-lg rounded-br-lg"><button class="outline-none p-3 py-2 bg-green-500 rounded-lg text-gray-100 shadow">
                  <div class="text-center uppercase">Save and redirect</div>
                </button>
                <a class="ml-4 text-sm underline text-gray-500">
                  <div>Cancel</div>
                </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop