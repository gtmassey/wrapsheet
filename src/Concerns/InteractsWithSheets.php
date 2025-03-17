<?php

namespace Gtmassey\Wrapsheet\Concerns;

trait InteractsWithSheets
{

    public function createSheetInFolder(string $folderId, string $sheetName, array $options = [])
    {
        return $this;
    }

    public function listSheets()
    {
        return $this;
    }

    public function createSheetInSheetsFolder(string $folderId)
    {
        return $this;
    }

    public function getSheet(string $sheetId)
    {
        return $this;
    }

    public function deleteSheet(string $sheetId)
    {
        return $this;
    }

    public function updateSheet(string $sheetId, array $data)
    {
        return $this;
    }

    public function copySheet(string $sheetId, string $destinationFolderId)
    {
        return $this;
    }

    public function sendSheetViaEmail(string $sheetId, array $emailData)
    {
        return $this;
    }

    public function moveSheet(string $sheetId, string $destinationFolderId)
    {
        return $this;
    }

    public function getSheetPublishStatus(string $sheetId)
    {
        return $this;
    }

    public function setSheetPublishStatus(string $sheetId, array $publishSettings)
    {
        return $this;
    }

    public function shareSheet(string $sheetId, array $shareDetails)
    {
        return $this;
    }

    public function listSheetShares(string $sheetId)
    {
        return $this;
    }

    public function getSheetShare(string $sheetId, string $shareId)
    {
        return $this;
    }

    public function deleteSheetShare(string $sheetId, string $shareId)
    {
        return $this;
    }

    public function updateSheetShare(string $sheetId, string $shareId, array $shareDetails)
    {
        return $this;
    }

    public function getSheetVersion(string $sheetId)
    {
        return $this;
    }

    public function listOrgSheets()
    {
        return $this;
    }

    public function createSheetInWorkspace(string $workspaceId)
    {
        return $this;
    }

}