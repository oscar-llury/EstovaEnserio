<?php

namespace Enserio\db;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Monolog\Formatter\LineFormatter;
use PDOException;

class LogErrores
{
    private $logger;

    const DEBUG = Logger::DEBUG;
    const INFO = Logger::INFO;
    const NOTICE = Logger::NOTICE;
    const WARNING = Logger::WARNING;
    const ERROR = Logger::ERROR;
    const CRITICAL = Logger::CRITICAL;
    const ALERT = Logger::ALERT;
    const EMERGENCY = Logger::EMERGENCY;

    const DATE_FORMAT = "Y-m-d H:i:s";
    const FILE_DATEFORMAT = "Ymd";
    const OUT_FORMAT = "[%datetime%] %channel% %level_name%-%context%: %message%\n";

    public function __construct()
    {
        $iniCore = parse_ini_file("properties.ini", true);

        $formatter = new LineFormatter(self::OUT_FORMAT, self::DATE_FORMAT);

        $ruta_log = sprintf('%s', $iniCore['coreLogs']['path']);

        $ruta_log .= '/' . $iniCore['coreLogs']['fileName'];
        var_dump($ruta_log);
        // Create a handler
        $stream = new RotatingFileHandler($ruta_log, 7, self::DEBUG, true, null, true);
        $stream->setFilenameFormat('{filename}.{date}', self::FILE_DATEFORMAT);
        $stream->setFormatter($formatter); //rota si es necesario
        $this->logger = new Logger($iniCore['coreLogs']['name']);
        $this->logger->pushHandler($stream);
    }

    //funcion que busca la línea de error en la clase Dao correspondiente
    private function getLineaError($e): int
    {
        $num = strpos($e->getTraceAsString(), 'Dao');
        $num = substr($e->getTraceAsString(), $num, 20);
        preg_match("/\((.*?)\)/", $num, $resultado);
        return $resultado[1];
    }

    // 100: Detailed debug information.
    public function debug(PDOException $e, string $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::DEBUG, $error, [$funcion, $linea]);
    }

    // 200: Interesting events.
    // Example: User logs in, SQL logs.
    public function info($e, $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::INFO, $error, [$funcion, $linea]);
    }

    //250: Normal but significant events.
    public function notice($e, $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::NOTICE, $error, [$funcion, $linea]);
    }

    // 300: Exceptional occurrences that are not errors.
    // Example: deprecated APIs, undesirable things that are not necessarily wrong.
    public function warning($e, $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::WARNING, $error, [$funcion, $linea]);
    }

    // 400: Runtime errors that do not require immediate action
    // but should typically be logged and monitored.
    public function error($e, $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::ERROR, $error, [$funcion, $linea]);
    }

    // 500: Critical conditions.
    // Example: Application component unavailable, unexpected exception.
    public function critical($e, $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::CRITICAL, $error, [$funcion, $linea]);
    }

    // 550: Action must be taken immediately.
    // Example: Entire website down, database unavailable
    // This should trigger the SMS alerts and wake you up.
    public function alert($e, $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::ALERT, $error, [$funcion, $linea]);
    }

    // 600: Emergency: system is unusable.
    public function emergency($e, $funcion): void
    {
        $error = $e->getMessage();
        $linea = $this->getLineaError($e);
        $this->logger->log(self::EMERGENCY, $error, [$funcion, $linea]);
    }
}
