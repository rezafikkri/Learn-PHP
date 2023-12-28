<?php

namespace Repository;

use Iterator;
use Model\Comment;

interface CommentRepository 
{
    function insert(Comment $comment): Comment;

    function findById(int $id): ?Comment;

    function findAll(): Iterator;
}

class CommentRepositoryImpl implements CommentRepository
{
    public function __construct(private \PDO $connection)
    {
        
    }

    public function insert(Comment $comment): Comment
    {
        $sql = "INSERT INTO comments (email, comment) VALUES (:email, :comment)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            ":email" => $comment->getEmail(),
            ":comment" => $comment->getComment()
        ]);
        $id = $this->connection->lastInsertId();
        $comment->setId($id);
        return $comment;
    }

    public function findById(int $id): ?Comment
    {
        $sql = "SELECT * FROM comments WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([":id" => $id]);

        if ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            return new Comment(
                id: $row["id"],
                email: $row["email"],
                comment: $row["comment"]
            );
        }

        return null;
    }

    public function findAll(): Iterator
    {
        $sql = "SELECT * FROM comments";
        $stmt = $this->connection->query($sql);

        while ($row = $stmt->fetch()) {
            yield new Comment(
                id: $row["id"],
                email: $row["email"],
                comment: $row["comment"]
            );
        }
    }
}
