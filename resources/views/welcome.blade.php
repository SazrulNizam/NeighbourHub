
<x-app-layout>

    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="page-header-title">
              <h5 class="mb-0 font-medium">Default</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page">Default</li>
            </ul>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
  <div class="card">
    <div class="card-header !pb-0 !border-b-0">
      <h5>Announcements</h5>
    </div>
    <div class="card-body space-y-4 mt-4">
      
      <!-- One announcement item -->
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3">
          
          <div>
            <p class="m-0">Weekly Maintenance</p>

          </div>
        </div>
        <div class="flex items-center space-x-2 text-sm">
          <span class="w-2.5 h-2.5 rounded-full bg-green-400"></span>
          <span class="text-gray-600">11 MAY 12:56</span>
        </div>
      </div>

      <!-- Another item -->
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3">
          
          <div>
            <p class="m-0">Tennis Court Opening</p>
            
          </div>
        </div>
        <div class="flex items-center space-x-2 text-sm">
          <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
          <span class="text-gray-600">11 MAY 10:35</span>
        </div>
        
      </div>
    </div>
  </div>
</div>

          <div class="col-span-12 xl:col-span-4 md:col-span-6">
  <div class="card">
    <div class="card-header !pb-0 !border-b-0">
      <h5>Upcoming Visitor</h5>
    </div>
    <div class="card-body">
      <div class="flex items-center justify-between gap-3 flex-wrap">
        <h3 class="font-light flex items-center mb-0">
           <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-1.jpg" alt="activity-user" />
          Bella
        </h3>
        <p class="mb-0 text-sm text-gray-500">Checked in: <span class="font-medium">11 May 12:56 PM</span></p>
        
         
      </div>

      <div class="mt-6 text-right">
        <a href="/add-visitor" class="bg-info-500 text-white text-sm px-4 py-1.5 rounded hover:bg-info-600">
          + Add Visitor
        </a>
      </div>
    </div>
  </div>
</div>




          <div class="col-span-12 xl:col-span-4">
  <div class="card">
    <div class="card-header !pb-0 !border-b-0">
      <h5>Facility</h5>
    </div>
    <div class="card-body">
      <div class="flex items-center justify-between gap-3 flex-wrap">
        <h3 class="font-light flex items-center mb-0">
          <i class="feather icon-calendar text-primary-500 text-[30px] mr-1.5"></i>
          Futsal Court
        </h3>
        <p class="mb-0 text-sm text-gray-500">Available: <span class="text-green-600 font-medium">3 slots today</span></p>
      </div>

      <div class="mt-6 flex justify-between items-center">
        <p class="text-sm text-gray-600">Next booking: <span class="font-semibold">4:00 PM - 5:00 PM</span></p>
        <a href="../booking/facility.html" class="bg-primary-500 text-white text-sm px-3 py-1.5 rounded hover:bg-primary-600">
  Book Now
</a>
      </div>
    </div>
  </div>
</div>

         
         
          
  <div class="col-span-12 xl:col-span-4 md:col-span-6">
  <div class="card user-list">
    <div class="card-header">
      <h5>Complaint Log</h5>
    </div>

    
    <div class="card-body">
  <ul class="space-y-3 text-sm text-gray-700">
    <li class="flex justify-between">
      <div class="flex items-center">
        <i class="feather icon-alert-circle text-danger mr-2"></i>
        <span class="text-base">Noise complaint - Unit A3-12</span>
      </div>
      <span class="text-base text-gray-500">Today</span>
    </li>
    <li class="flex justify-between">
      <div class="flex items-center">
        <i class="feather icon-alert-circle text-warning mr-2"></i>
        <span class="text-base">Lift malfunction - Block B</span>
      </div>
      <span class="text-base text-gray-500">25 May</span>
    </li>
    <li class="flex justify-between">
      <div class="flex items-center">
        <i class="feather icon-alert-circle text-info mr-2"></i>
        <span class="text-base">Water leakage - Lobby</span>
      </div>
      <span class="text-base text-gray-500">24 May</span>
    </li>
  </ul>

  <div class="mt-6 text-right">
    <a href="/complaints" class="bg-danger-500 text-white text-sm px-4 py-1.5 rounded hover:bg-danger-600">
      View All
    </a>
  </div>
</div>

  </div>
</div>

          <div class="col-span-12 xl:col-span-8 md:col-span-6">
            <div class="card table-card">
              <div class="card-header">
                <h5>Recent Visitor</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tbody>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-1.jpg" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1">Isabella Christensen</h6>
                          <p class="m-0">One Time Pass</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            11 MAY 12:56
                          </h6>
                        </td>
                        
                      </tr>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-2.jpg" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1">Mathilde Andersen</h6>
                          <p class="m-0">One Time Pass</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-danger text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            11 MAY 10:35
                          </h6>
                        </td>
                        
                      </tr>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-3.jpg" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1">Karla Sorensen</h6>
                          <p class="m-0">One Time Pass</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            9 MAY 17:38
                          </h6>
                        </td>
                        
                      </tr>
                      
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
     </x-app-layout>