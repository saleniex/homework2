Homework
==

This is simple web application for number evaluation. Current version accepts query parameter `number` and evaluates it 
whether this number is even or odd. Evaluation result is logged.

**RUN**:

```
docker compose up 
```
By default app use 8080 port.
If need other port, add before docker compose command env APP_PORT=****
```
APP_PORT=8081 docker compose up 
```

**Your task is**:

1. Add two new evaluation methods:
   1. evaluate whether number is positive,
   2. evaluate whether number is zero (`0`);
2. Enable evaluation method switch using query parameter;
3. Containerize application (create `Dockerfile` and `docker-compose.yml`).

**Rules**:

1. Commit after each step;
2. Submit results as pull request.
