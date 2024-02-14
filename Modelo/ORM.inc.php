<?php

include_once('config/database.inc.php');

class ORM {

    private static function conectarse() {
        try {
            $dbConn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASS);
            $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    

    public function findAllWithMultimedia(string $table): array {
        try {
            $dbConn = self::conectarse();
    
            // Preparamos la sentencia con JOIN entre archivos_multimedia y la tabla específica
            $sentencia = $dbConn->prepare("SELECT * FROM $table WHERE deleted = 0;");
    
            // Ejecutamos la sentencia
            $sentencia->execute();
    
            // Obtenemos el resultado
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            // Imprime el mensaje de error
            echo "Error: " . $error->getMessage();
            // Si hay algún error, retornamos un array vacío
            return [];
        } finally {
            // Cerramos la conexión
            $dbConn = null;
        }
    }
    

    //Funcion para encontrar un objeto por su id
    public function find($table, $id) {
        try {
            $dbConn = self::conectarse();

            // Preparamos la sentencia con JOIN entre archivos_multimedia y la tabla específica
            $sentencia = $dbConn->prepare("SELECT * FROM $table WHERE id = :id;");

            // Ejecutamos la sentencia
            $sentencia->execute(['id' => $id]);

            // Obtenemos el resultado
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            // Imprime el mensaje de error
            echo "Error: " . $error->getMessage();
            // Si hay algún error, retornamos un array vacío
            return [];
        } finally {
            // Cerramos la conexión
            $dbConn = null;
        }
    }


    // Función para insertar un nuevo registro en la tabla
    public function insert($table, $data) {
        try {
            $dbConn = self::conectarse();

            // Construimos la consulta SQL dinámicamente
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $sql = "INSERT INTO $table ($columns) VALUES ($values)";

            // Preparamos la sentencia
            $sentencia = $dbConn->prepare($sql);

            // Ejecutamos la sentencia con los valores proporcionados
            $sentencia->execute($data);

            // Retorna el ID del último registro insertado
            return $dbConn->lastInsertId();
        } catch (PDOException $error) {
            // Imprime el mensaje de error
            echo "Error: " . $error->getMessage();
            // Si hay algún error, retornamos -1
            return -1;
        } finally {
            // Cerramos la conexión
            $dbConn = null;
        }
    }

    public static function softDelete($table, $id) {
        try {
            $dbConn = self::conectarse();
    
            // Utilizamos transacciones para garantizar la consistencia de la base de datos
            $dbConn->beginTransaction();
    
            // Actualizamos el campo 'deleted' a 1 para indicar que el registro ha sido "borrado"
            $sentencia = $dbConn->prepare("UPDATE $table SET deleted = 1 WHERE id = :id");
    
            // Ejecutamos la sentencia con el valor proporcionado
            $sentencia->execute(['id' => $id]);
    
            // Confirmamos la transacción si la actualización fue exitosa
            $dbConn->commit();
    
            // Retorna la cantidad de filas afectadas
            $rowCount = $sentencia->rowCount();
            echo "Filas afectadas: $rowCount";
    
            return $rowCount;
        } catch (PDOException $error) {
            // Revertimos la transacción si hay algún error
            $dbConn->rollBack();
    
            // Imprime el mensaje de error
            echo "Error: " . $error->getMessage();
    
            // Si hay algún error, retornamos -1
            return -1;
        } finally {
            // Cerramos la conexión
            $dbConn = null;
        }
    }


    //Funcion para actualizar si está guardado o no un archivo multimedia
    public static function updateGuardadoStatus($table, $id) {
        try {
            $dbConn = self::conectarse();
    
            // Actualizamos el campo 'guardado' a un nuevo valor
            $sentencia = $dbConn->prepare("UPDATE $table SET guardado = :guardado WHERE id = :id");
            
            // Puedes establecer el nuevo valor según tus necesidades (por ejemplo, 'si' o 'no')
            $nuevoGuardado = 'si';
    
            // Ejecutamos la sentencia con los valores proporcionados
            $sentencia->execute(['id' => $id, 'guardado' => $nuevoGuardado]);
    
            // Retorna la cantidad de filas afectadas
            $rowCount = $sentencia->rowCount();
            echo "Filas afectadas: $rowCount";
    
            return $rowCount;
        } catch (PDOException $error) {
            // Imprime el mensaje de error
            echo "Error: " . $error->getMessage();
    
            // Si hay algún error, retornamos -1
            return -1;
        } finally {
            // Cerramos la conexión
            $dbConn = null;
        }
    }
    
    
    
    
}
?>
