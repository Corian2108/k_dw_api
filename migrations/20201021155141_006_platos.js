exports.up = function(knex) {
    return knex.schema.hasTable('platos').then(function(exists) {
        if (!exists) {
            return knex.schema.createTable('platos', function(t) {
                t.increments('id_plato').primary();
                t.string('nombre_plato', 100);
                t.float('precio');
                t.integer('cantidad');
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