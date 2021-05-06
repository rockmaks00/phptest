create table tasks
(
    id      serial                not null
        constraint tasks_pkey
            primary key,
    username    varchar(20)           not null,
    email   varchar(100)          not null,
    text    text                  not null,
    changed boolean default false not null,
    status  boolean default false not null
);