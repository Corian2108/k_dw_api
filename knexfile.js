// Update with your config settings.

module.exports = {

    development: {
        client: 'postgresql',
        connection: {
            host: '127.0.0.1',
            user: 'postgres',
            password: '1234',
            database: 'prueba'
        },
        useNullAsDefault: true
    },

    staging: {
        client: 'postgresql',
        connection: {
            database: 'my_db',
            user: 'username',
            password: 'password'
        },
        pool: {
            min: 2,
            max: 10
        },
        migrations: {
            tableName: 'knex_migrations'
        }
    },

    production: {
        client: 'postgresql',
        connection: {
            database: 'my_db',
            user: 'username',
            password: 'password'
        },
        pool: {
            min: 2,
            max: 10
        },
        migrations: {
            tableName: 'knex_migrations'
        }
    }

};