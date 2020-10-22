exports.up = function(knex) {
    return knex.schema.hasTable('mesas').then(function(exists) {
        if (!exists) {
            return knex.schema.createTable('mesas', function(t) {
                t.increments('id_mesa').primary();
            });
        }
    });
};

exports.down = function(knex) {
    return knex.schema.hasTable('mesas').then(function(exists) {
        if (exists) {
            return knex.schema.dropTable('mesas');
        }
    });
};