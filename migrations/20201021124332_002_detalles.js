exports.up = function(knex) {
    return knex.schema.hasTable('detalles').then(function(exists) {
        if (!exists) {
            return knex.schema.createTable('detalles', function(t) {
                t.increments('id_detalle').primary();
                t.string('lista_platos', 50);
                t.integer('cantidad_platos');
                t.float('precio_platos');
                t.float('total');
            });
        }
    });
};

exports.down = function(knex) {
    return knex.schema.hasTable('detalles').then(function(exists) {
        if (exists) {
            return knex.schema.dropTable('detalles');
        }
    });
};