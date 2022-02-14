<?php include('./easypharmConfig/connection.php') ?>

<table class="min-w-full bg-white rounded whitespace-nowrap">
    <thead class="border-b bg-gray-50">
        <tr class="">
            <!-- <th class="px-3 py-3 text-center ">
                <div class="flex place-content-center">
                    <input type="checkbox" name="select_all" id="select_all" class="w-4 h-4 text-indigo-500 border border-gray-200 rounded focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 dark:border-gray-700" />
                </div>
            </th> -->
            <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                ID</th>
            <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                Date</th>
            <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                Client</th>
            <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                Adresse</th>
            <th class="px-3 py-3 text-xs font-normal text-right text-gray-500 uppercase align-middle">
                N°=Server</th>
            <th class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
            </th>
        </tr>
    </thead>
    <?php
    $query = mysqli_query($con, "SELECT * from `client`");
    while ($row = mysqli_fetch_array($query)) :
        $id =  $row["id"];
        $name = $row["fullname"];
        $email = $row["email"];
        $adresse = $row["adresse"];
        $tel = $row["tel"];
        $nserver = $row["nombre_server"];
        $datevalidation = $row["date_validation"];
    ?>

        <tbody class="text-sm bg-white divide-y divide-gray-200">
            <tr>
                <!-- <td class="w-20 px-3 py-4 text-center">
                    <input type="checkbox" name="select" class="w-4 h-4 rounded opacity-50" />
                </td> -->
                <td class="px-3 py-4 text-gray-600 ">#<?php echo $id ?></td>
                <td class="px-3 py-4 text-gray-500 "><?php echo $datevalidation ?></td>
                <td class="px-3 py-4">
                    <div class="flex items-center w-max">
                        <img width="50" height="50" class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1506085452766-c330853bea50?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;fit=crop&amp;h=200&amp;w=200&amp;s=3e378252a934e660f231666b51bd269a" alt="avatar" />
                        <div class="ml-4">
                            <div><?php echo $name ?></div>
                            <div class="text-sm text-gray-400"><?php echo $email ?></div>
                        </div>
                    </div>
                </td>
                <td class="px-3 py-4">
                    <span class="px-4 py-1 text-sm text-green-500 rounded-full bg-green-50"><?php echo $adresse ?></span>
                </td>
                <td class="px-3 py-4 text-right text-gray-500 "><?php echo $nserver ?></td>
                <td class="w-20 px-3 py-2 text-center text-gray-500 ">
                    <div class="flex place-content-center">
                        <!-- <a href="#!">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                </path>
                            </svg>
                        </a> -->


                    </div>
                </td>
            </tr>

        </tbody>
    <?php endwhile;    ?>

</table>


<script type="text/javascript">
    $(document).ready(function() {
        $('.openModal').on('click', function(e) {
            $('#interestModal').removeClass('invisible');
        });
        $('.closeModal').on('click', function(e) {
            $('#interestModal').addClass('invisible');
        });
    });
</script>