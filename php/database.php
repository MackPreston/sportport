<?php
function connect_db(){
    // db configuration
    $configs = include('config.php');
    $db_hostname = $configs['hostname'];
    $db_username = $configs['username'];
    $db_password = $configs['password'];
    $db_name = $configs['dbname'];

    try {
        $conn = new PDO("mysql:host=$db_hostname;dbname=$db_name", $db_username, $db_password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Unable to connect to the database!\n");
    }
}

function get_user_by_email($conn, $email){
    $stmt = $conn->prepare("SELECT * from users WHERE Email=?");
    $stmt->execute([$email]);
    $users = $stmt->fetchAll();
    assert(sizeof($users) < 2);
    if(sizeof($users) == 1){
        return user_db_to_dto($users[0]);
    }
    else{
        return null;
    }
}


function get_leagues($conn, $sportName, $userID){
    if($userID == Null){
        //Get all leagues for a sport
        $stmt = $conn->prepare("SELECT * from leagues JOIN team_membership JOIN sports WHERE SportName=?");
        $stmt->execute([$sportName]);
    }
    else{
        //Get all leagues for a sport, that a specific
        $stmt = $conn->prepare("SELECT * from leagues WHERE SportID=? AND UserID=?");
        $stmt->execute([$sportName, $userID]);
    }
    $leagues = $stmt->fetchAll();
    return $leagues;
}
function get_teams_byleague($conn, $leagueID){

  //Get all teams for a league
  $stmt = $conn->prepare("SELECT * FROM teams WHERE LeagueID=?");
  $stmt->execute([$leagueID]);
  $teams = $stmt->fetchAll();
  return $teams;
}
function get_teams($conn, $leagueID, $userID){
    if($userID == Null){
        //Get all teams for a league
        $stmt = $conn->prepare("SELECT * from teams WHERE LeagueID=?");
        $stmt->execute([$leagueID]);
    }
    else{
        //Get all teams for a user
        $stmt = $conn->prepare("SELECT * from team_membership JOIN teams JOIN leagues JOIN sports WHERE UserID=?");
        $stmt->execute([$userID]);
    }
    $teams = $stmt->fetchAll();
    return $teams;
}

function get_league_by_id($conn, $leagueID)
{
}

function user_exists($conn, $email){
    $user = get_user_by_email($conn, $email);
    if($user == null){ return false; }
    else{ return true; }
}

function create_user($conn, $user){
    $stmt = $conn->prepare("INSERT INTO users (Email, LastName, FirstName, PasswordHash, Salt, DateOfBirth) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $user->email);
    $stmt->bindParam(2, $user->lastName);
    $stmt->bindParam(3, $user->firstName);
    $stmt->bindParam(4, $user->password);
    $stmt->bindParam(5, $user->salt);
    $stmt->bindParam(6, $user->dob);
    return $stmt->execute();
}

function create_game($conn, $game){
    $stmt = $conn->prepare("INSERT INTO games (AteamID, BteamID, AteamScore, AteamScore, Date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $game->aTeamID);
    $stmt->bindParam(2, $game->bTeamID);
    $stmt->bindParam(3, $game->aTeamScore);
    $stmt->bindParam(4, $game->bTeamScore);
    $stmt->bindParam(5, $game->date);
    return $stmt->execute();
}

function create_league($conn, $leagueName, $sportID){
    $stmt = $conn->prepare("INSERT INTO leagues (LeagueName, SportID) VALUES (?, ?)");
    $stmt->bindParam(1, $leagueName);
    $stmt->bindParam(2, $sportID);
    return $stmt->execute();
}

function create_sport($conn, $sportName){
    $stmt = $conn->prepare("INSERT INTO sports (SportName) VALUES (?)");
    $stmt->bindParam(1, $sportName);
    return $stmt->execute();
}

function create_team($conn, $teamName, $leagueID){
    $stmt = $conn->prepare("INSERT INTO teams (TeamName, LeagueID) VALUES (?, ?)");
    $stmt->bindParam(1, $teamName);
    $stmt->bindParam(2, $leagueID);
    return $stmt->execute();
}

function create_team_membership($conn, $teamID, $userID){
    $stmt = $conn->prepare("INSERT INTO team_membership (TeamID, UserID) VALUES (?, ?)");
    $stmt->bindParam(1, $teamID);
    $stmt->bindParam(2, $userID);
    return $stmt->execute();
}
