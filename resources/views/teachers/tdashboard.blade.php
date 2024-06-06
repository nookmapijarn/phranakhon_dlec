<x-teachers-layout>
  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <canvas id="myChart" height="100px"></canvas>     
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                จำนวนนักศึกษา
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">หลักสูตรการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน พุทธศักราช 2551</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-sm">
                        ภาคเรียน
                    </th>
                    @foreach($labels as $sem)
                    <th scope="col" class="px-6 py-3 text-sm">
                        {{ $sem }}
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:underline">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        นักศึกษาใหม่
                    </th>
                    @foreach($data_new_student as $ns)
                    <td class="px-6 py-4">
                        {{ $ns }}  
                    </td>
                    @endforeach
                </tr>
                <tr class="bg-pink-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:underline">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        นักศึกษาเก่า
                    </th>
                    @foreach($data_old_student as $os)
                    <td class="px-6 py-4">
                        {{ $os }}
                    </td>
                    @endforeach
                </tr>
                <tr class="bg-indigo-100 dark:bg-gray-800 hover:underline">
                    <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                        นักศึกษาทั้งหมด
                    </th>
                    @foreach($data_student as $os)
                    <td class="px-6 py-4 font-bold">
                        {{ $os }}
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    {{-- รายตำบล --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                จำนวนนักศึกษา (รายตำบล) ภาคเรียนที่ {{$current_semestry}}
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">หลักสูตรการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน พุทธศักราช 2551</p>
            </caption>
            <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ลำดับ
                    </th>
                    <th scope="col" class="px-6 py-3">
                        รหัสตำบล
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ศกร.ระดับตำบล
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ครู
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        ประถม
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        มัธยมต้น
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        มัธยมปลาย
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        ทั้งหมด
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($student_tumbon as $sttm)
                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 hover:border-fuchsia-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $sttm->GRP->GRP_CODE }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $sttm->GRP->GRP_NAME }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $sttm->GRP->GRP_ADVIS }}
                    </th>
                    <td class="bg-pink-100 text-center px-6 py-4">
                        {{-- ประถม --}}
                        {{ $sttm->STUDENT->ST1 }}
                    </td>
                    <td class="bg-green-100 text-center px-6 py-4">
                        {{-- ต้น --}}
                        {{ $sttm->STUDENT->ST2 }} 
                    </td>
                    <td class="bg-yellow-100 text-center px-6 py-4">
                        {{-- ปลาย --}}
                        {{ $sttm->STUDENT->ST3 }}
                    </td>
                    <td class="bg-blue-100 font-bold text-center px-6 py-4">
                        {{-- รวม --}}
                        {{ $sttm->STUDENT->ST1 + $sttm->STUDENT->ST2 + $sttm->STUDENT->ST3 }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </div>
</x-teachers-layout>

{{-- Script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">

var labels =  {{ Js::from($labels) }};
var data_student =  {{ Js::from($data_student) }};
var data_new_student =  {{ Js::from($data_new_student) }}; 
var data_old_student =  {{ Js::from($data_old_student) }};

// จำนวนนักศึกษา
   const student_data = {
      labels: labels,
      datasets: [
        {
          label: 'นักศึกษาใหม่',
          backgroundColor: '#ff901f',
          borderColor: '#ff901f',
          data: data_new_student,
        },
        {
          label: 'นักศึกษาเก่า',
          backgroundColor: '#c621b6',
          borderColor: '#c621b6',
          data: data_old_student,
        },
        {
          label: 'นักศึกษาทั้งหมด',
          backgroundColor: '#2d60dd',
          borderColor: '#2d60dd',
          data: data_student,
        }
      ]
    };
    const config = {
      type: 'bar',
      data: student_data,
      options: {
        indexAxis: 'x',
        // scales: {
        //     x: {
        //         stacked: true,
        //     },
        //     y: {
        //         stacked: true
        //     }
        // }
      }
    };
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
</script>
