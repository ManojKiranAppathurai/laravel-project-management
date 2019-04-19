<?php

return [
    'accepted'                => 'The :attribute must be accepted.',
    'active_url'              => 'The :attribute is not a valid URL.',
    'after'                   => 'The :attribute must be a date after :date.',
    'after_or_equal'          => 'The :attribute must be a date after or equal to :date.',
    'alpha'                   => 'The :attribute may only contain letters.',
    'alpha_dash'              => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'               => 'The :attribute may only contain letters and numbers.',
    'array'                   => 'The :attribute must be an array.',
    'before'                  => 'The :attribute must be a date before :date.',
    'before_or_equal'         => 'The :attribute must be a date before or equal to :date.',
    'between'                 => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'                 => 'The :attribute field must be true or false.',
    'confirmed'               => 'The :attribute confirmation does not match.',
    'date'                    => 'The :attribute is not a valid date.',
    'date_format'             => 'The :attribute does not match the format :format.',
    'different'               => 'The :attribute and :other must be different.',
    'digits'                  => 'The :attribute must be :digits digits.',
    'digits_between'          => 'The :attribute must be between :min and :max digits.',
    'dimensions'              => 'The :attribute has invalid image dimensions.',
    'distinct'                => 'The :attribute field has a duplicate value.',
    'email'                   => 'The :attribute must be a valid email address.',
    'exists'                  => 'The selected :attribute is invalid.',
    'file'                    => 'The :attribute must be a file.',
    'filled'                  => 'The :attribute field must have a value.',
    'gt'                      => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                     => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                   => 'The :attribute must be an image.',
    'in'                      => 'The selected :attribute is invalid.',
    'in_array'                => 'The :attribute field does not exist in :other.',
    'integer'                 => 'The :attribute must be an integer.',
    'ip'                      => 'The :attribute must be a valid IP address.',
    'ipv4'                    => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                    => 'The :attribute must be a valid IPv6 address.',
    'json'                    => 'The :attribute must be a valid JSON string.',
    'lt'                      => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                     => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                     => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                   => 'The :attribute must be a file of type: :values.',
    'mimetypes'               => 'The :attribute must be a file of type: :values.',
    'min'                     => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'                  => 'The selected :attribute is invalid.',
    'not_regex'               => 'The :attribute format is invalid.',
    'numeric'                 => 'The :attribute must be a number.',
    'present'                 => 'The :attribute field must be present.',
    'regex'                   => 'The :attribute format is invalid.',
    'required'                => 'The :attribute field is required.',
    'required_if'             => 'The :attribute field is required when :other is :value.',
    'required_unless'         => 'The :attribute field is required unless :other is in :values.',
    'required_with'           => 'The :attribute field is required when :values is present.',
    'required_with_all'       => 'The :attribute field is required when :values is present.',
    'required_without'        => 'The :attribute field is required when :values is not present.',
    'required_without_all'    => 'The :attribute field is required when none of :values are present.',
    'same'                    => 'The :attribute and :other must match.',
    'size'                    => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'                  => 'The :attribute must be a string.',
    'timezone'                => 'The :attribute must be a valid zone.',
    'unique'                  => 'The :attribute has already been taken.',
    'uploaded'                => 'The :attribute failed to upload.',
    'url'                     => 'The :attribute format is invalid.',
    'custom'                  => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'              => [],
    'site_title'              => 'My Testing Panel',
    'userManagement'          => [
        'title'          => 'User Management',
        'title_singular' => 'User Management',
        'fields'         => [],
    ],
    'permission'              => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'                    => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'                    => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'auditLog'                => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Description',
            'description_helper'  => '',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => '',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => '',
            'user_id'             => 'User ID',
            'user_id_helper'      => '',
            'properties'          => 'Properties',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
        ],
    ],
    'clientManagementSetting' => [
        'title'          => 'Client Management Settings',
        'title_singular' => 'Client Management Setting',
        'fields'         => [],
    ],
    'currency'                => [
        'title'          => 'Currencies',
        'title_singular' => 'Currency',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'name'                 => 'Name',
            'name_helper'          => '',
            'code'                 => 'Currency code',
            'code_helper'          => '',
            'main_currency'        => 'Main currency',
            'main_currency_helper' => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => '',
        ],
    ],
    'transactionType'         => [
        'title'          => 'Transaction Types',
        'title_singular' => 'Transaction Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'incomeSource'            => [
        'title'          => 'Income Sources',
        'title_singular' => 'Income Source',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'fee_percent'        => 'Fee Percent',
            'fee_percent_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'clientStatus'            => [
        'title'          => 'Client Statuses',
        'title_singular' => 'Client Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'projectStatus'           => [
        'title'          => 'Project Statuses',
        'title_singular' => 'Project Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'clientManagement'        => [
        'title'          => 'Client Management',
        'title_singular' => 'Client Management',
        'fields'         => [],
    ],
    'client'                  => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'first_name'        => 'First name',
            'first_name_helper' => '',
            'last_name'         => 'Last name',
            'last_name_helper'  => '',
            'company'           => 'Company',
            'company_helper'    => '',
            'email'             => 'Email',
            'email_helper'      => '',
            'phone'             => 'Phone',
            'phone_helper'      => '',
            'website'           => 'Website',
            'website_helper'    => '',
            'skype'             => 'Skype',
            'skype_helper'      => '',
            'country'           => 'Country',
            'country_helper'    => '',
            'status'            => 'Client Status',
            'status_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'project'                 => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'client'             => 'Client',
            'client_helper'      => '',
            'description'        => 'Description',
            'description_helper' => '',
            'start_date'         => 'Start Date',
            'start_date_helper'  => '',
            'budget'             => 'Budget',
            'budget_helper'      => '',
            'status'             => 'Project Status',
            'status_helper'      => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'note'                    => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'project'           => 'Project',
            'project_helper'    => '',
            'note_text'         => 'Note Text',
            'note_text_helper'  => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'document'                => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'project'              => 'Project',
            'project_helper'       => '',
            'document_file'        => 'File',
            'document_file_helper' => '',
            'name'                 => 'Document Name',
            'name_helper'          => '',
            'description'          => 'Description',
            'description_helper'   => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => '',
        ],
    ],
    'transaction'             => [
        'title'          => 'Transactions',
        'title_singular' => 'Transaction',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'project'                 => 'Project',
            'project_helper'          => '',
            'transaction_type'        => 'Transaction Type',
            'transaction_type_helper' => '',
            'income_source'           => 'Income Source',
            'income_source_helper'    => '',
            'amount'                  => 'Amount',
            'amount_helper'           => '',
            'currency'                => 'Currency',
            'currency_helper'         => '',
            'transaction_date'        => 'Transaction Date',
            'transaction_date_helper' => '',
            'name'                    => 'Name',
            'name_helper'             => '',
            'description'             => 'Description',
            'description_helper'      => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => '',
        ],
    ],
    'clientReport'            => [
        'title'          => 'Reports',
        'title_singular' => 'Report',
        'fields'         => [],
        'reports'        => [
            'month'       => 'Month',
            'income'      => 'Income',
            'expenses'    => 'Expenses',
            'fees'        => 'Fees',
            'total'       => 'Total',
            'allProjects' => 'All projects',
        ],
    ],
    'timeManagement'          => [
        'title'          => 'Time management',
        'title_singular' => 'Time management',
        'fields'         => [],
    ],
    'timeWorkType'            => [
        'title'          => 'Work Types',
        'title_singular' => 'Work Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeProject'             => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeEntry'               => [
        'title'          => 'Time Entries',
        'title_singular' => 'Time Entry',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'work_type'         => 'Work Type',
            'work_type_helper'  => '',
            'project'           => 'Project',
            'project_helper'    => '',
            'start_time'        => 'Start time',
            'start_time_helper' => '',
            'end_time'          => 'End time',
            'end_time_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeReport'              => [
        'title'          => 'Monthly Reports',
        'title_singular' => 'Monthly Report',
        'fields'         => [],
        'reports'        => [
            'timeEntriesReport' => 'Time entries report',
            'timeByProjects'    => 'Report by project',
            'timeByWorkType'    => 'Report by work type',
        ],
    ],
];