exports.up = function(knex) {
    return knex.schema.hasTable('ordenes').then(function(exists) {
        if (!exists) {
            return knex.schema.createTable('ordenes', function(t) {
                t.increments('id_orden').primary();
                t.integer('detalle');
                t.integer('mesa');
                t.integer('estado');
                t.integer('hash');
            });
        }
    });
};

exports.down = function(knex) {
    return knex.schema.hasTable('ordenes').then(function(exists) {
        if (exists) {
            return knex.schema.dropTable('ordenes');
        }
    });
};