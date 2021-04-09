
<?php

    session_start();
    if (!$_SESSION['user']) {
        echo json_encode(array());
        exit;
    } else {
        // DB table to use
        $table = 'transactions';

        // Table's primary key
        $primaryKey = 'id';

        // Array of database columns which should be read and sent back to DataTables.
        // The `db` parameter represents the column name in the database, while the `dt`
        // parameter represents the DataTables column identifier. In this case simple
        // indexes
        $columns = array(
            array( 'db' => 'id', 'dt' => 0 ),
            array(
                'db'        => 'trans_type',
                'dt'        => 1,
                'formatter' => function( $d, $row ) {
                    if ($d==0) {
                        return 'Income';
                    } else {
                        return 'Expense';
                    }
                }
            ),
            array(
                'db' => 'trans_amount',
                'dt' => 2,
                'formatter' => function( $d, $row ) {
                    return '₹'.number_format($d);
                }
            ),
            array(
                'db'        => 'trans_date',
                'dt'        => 3,
                'formatter' => function( $d, $row ) {
                    return date( 'jS M y', strtotime($d));
                }
            ),
            array( 'db' => 'narration', 'dt' => 4 ),
            array( 'dt' => 5 ),
        );

        // SQL server connection information
        $sql_details = array(
            'user' => '',
            'pass' => '',
            'db'   => '',
            'host' => ''
        );


        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        * If you just want to use the basic configuration for DataTables with PHP
        * server-side, there is no need to edit below this line.
        */

        $conditions = array(
            'delete_status = 0',
            'user_id = '.$_SESSION['user']
        );

        if (isset($_GET['type']) && $_GET['type']!=-1) {
            array_push($conditions, 'trans_type = '.$_GET['type']);
        }

        if (isset($_GET['dates']) && !empty($_GET['dates'])) {
            // str_replace(search, replace, subject)
            $dates = explode('-', $_GET['dates']);
            $from = date('Y-m-d', strtotime(str_replace('/', '-', trim($dates[0]))));
            $to = date('Y-m-d', strtotime(str_replace('/', '-', trim($dates[1]))));
            array_push($conditions, 'trans_date >= "'.$from.'"');
            array_push($conditions, 'trans_date <= "'.$to.'"');
        }
        require( 'ssp.class.php' );

        echo json_encode(
            SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $conditions )
        );
    }

?>