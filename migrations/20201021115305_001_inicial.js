exports.up = function(knex, Promise) {
    return knex.schema.hasTable('estados').then(function(exists) {
        if (!exists) {
            return knex.schema.createTable('estados', function(t) {
                t.increments('id_estado').primary();
                t.string('lista_estados', 50);
            });
        }
    });
};

exports.down = function(knex, Promise) {
    return knex.schema.hasTable('estados').then(function(exists) {
        if (exists) {
            return knex.schema.dropTable('estados');
        }
    });
};