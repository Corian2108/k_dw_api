exports.up = function(knex) {
    return knex.schema.hasTable('meseros').then(function(exists) {
        if (!exists) {
            return knex.schema.createTable('meseros', function(t) {
                t.increments('id_mesero').primary();
                t.string('nombre_mesero', 50);
                t.string('apellido_mesero', 50);
                t.string('operario', 32);
                t.string('hash', 32);
            });
        }
    });
};

exports.down = function(knex) {
    return knex.schema.hasTable('meseros').then(function(exists) {
        if (exists) {
            return knex.schema.dropTable('meseros');
        }
    });
};