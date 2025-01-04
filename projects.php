<?php

require_once 'db.php';

class Projects extends DB {
    public function insert($title, $desc) {
        $this->connect();

        $sql = "INSERT INTO projects (title, description) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $title, $desc);
        
        if ($stmt->execute()) {
            $stmt->close();
            $this->closeConnection();
            return "Success";
        } else {
            $error = "Error" . $stmt->error;
            $stmt->close();
            $this->closeConnection();
            return $error;
        }
        
    }
    public function update($id, $title, $desc) {
        $this->connect();

        $sql = "UPDATE projects SET title = ?, description = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $title, $desc, $id);
        
        if ($stmt->execute()) {
            $stmt->close();
            $this->closeConnection();
            return "Success";
        } else {
            $error = "Error" . $stmt->error;
            $stmt->close();
            $this->closeConnection();
            return $error;
        }
        
    }

    public function delete($id) {
        $this->connect();
        
        $sql = "DELETE FROM projects WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $stmt->close();
            $this->closeConnection();
            return "Success";
        } else {
            $error = "Error" . $stmt->error;
            $stmt->close();
            $this->closeConnection();
            return $error;
        }
        
    }

    public function getProjects(){
        $this->connect();

        $sql = "SELECT * FROM projects";
        $result = $this->conn->query($sql);
        $projects = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $projects[] = $row;
            }
        }

        $this->closeConnection();
        return $projects;
    }
}

?>