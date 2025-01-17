<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-04-19 16:06:27',
            'updated_at' => '2019-04-19 16:06:27',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '17',
                'title'      => 'audit_log_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '18',
                'title'      => 'audit_log_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '19',
                'title'      => 'client_management_setting_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '20',
                'title'      => 'currency_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '21',
                'title'      => 'currency_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '22',
                'title'      => 'currency_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '23',
                'title'      => 'currency_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '24',
                'title'      => 'currency_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '25',
                'title'      => 'transaction_type_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '26',
                'title'      => 'transaction_type_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '27',
                'title'      => 'transaction_type_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '28',
                'title'      => 'transaction_type_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '29',
                'title'      => 'transaction_type_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '30',
                'title'      => 'income_source_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '31',
                'title'      => 'income_source_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '32',
                'title'      => 'income_source_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '33',
                'title'      => 'income_source_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '34',
                'title'      => 'income_source_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '35',
                'title'      => 'client_status_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '36',
                'title'      => 'client_status_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '37',
                'title'      => 'client_status_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '38',
                'title'      => 'client_status_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '39',
                'title'      => 'client_status_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '40',
                'title'      => 'project_status_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '41',
                'title'      => 'project_status_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '42',
                'title'      => 'project_status_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '43',
                'title'      => 'project_status_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '44',
                'title'      => 'project_status_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '45',
                'title'      => 'client_management_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '46',
                'title'      => 'client_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '47',
                'title'      => 'client_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '48',
                'title'      => 'client_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '49',
                'title'      => 'client_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '50',
                'title'      => 'client_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '51',
                'title'      => 'project_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '52',
                'title'      => 'project_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '53',
                'title'      => 'project_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '54',
                'title'      => 'project_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '55',
                'title'      => 'project_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '56',
                'title'      => 'note_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '57',
                'title'      => 'note_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '58',
                'title'      => 'note_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '59',
                'title'      => 'note_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '60',
                'title'      => 'note_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '61',
                'title'      => 'document_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '62',
                'title'      => 'document_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '63',
                'title'      => 'document_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '64',
                'title'      => 'document_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '65',
                'title'      => 'document_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '66',
                'title'      => 'transaction_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '67',
                'title'      => 'transaction_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '68',
                'title'      => 'transaction_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '69',
                'title'      => 'transaction_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '70',
                'title'      => 'transaction_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '71',
                'title'      => 'client_report_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '72',
                'title'      => 'client_report_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '73',
                'title'      => 'client_report_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '74',
                'title'      => 'client_report_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '75',
                'title'      => 'client_report_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '76',
                'title'      => 'time_management_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '77',
                'title'      => 'time_work_type_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '78',
                'title'      => 'time_work_type_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '79',
                'title'      => 'time_work_type_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '80',
                'title'      => 'time_work_type_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '81',
                'title'      => 'time_work_type_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '82',
                'title'      => 'time_project_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '83',
                'title'      => 'time_project_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '84',
                'title'      => 'time_project_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '85',
                'title'      => 'time_project_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '86',
                'title'      => 'time_project_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '87',
                'title'      => 'time_entry_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '88',
                'title'      => 'time_entry_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '89',
                'title'      => 'time_entry_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '90',
                'title'      => 'time_entry_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '91',
                'title'      => 'time_entry_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '92',
                'title'      => 'time_report_create',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '93',
                'title'      => 'time_report_edit',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '94',
                'title'      => 'time_report_show',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '95',
                'title'      => 'time_report_delete',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ],
            [
                'id'         => '96',
                'title'      => 'time_report_access',
                'created_at' => '2019-04-19 16:06:27',
                'updated_at' => '2019-04-19 16:06:27',
            ]];

        Permission::insert($permissions);
    }
}
